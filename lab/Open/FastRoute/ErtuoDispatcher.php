<?php

namespace Ertuo\Lab\Open\FastRoute;

use Ertuo\Builder\BuilderWithArrays;
use Ertuo\Builder\Rig;
use Ertuo\Dispatcher;
use Ertuo\Kit;
use Ertuo\Result;
use Ertuo\RouteAbstract;
use Ertuo\Rule\RuleInterface;
use Ertuo\Lab\Open\FastRoute\ErtuoDataGenerator;
use FastRoute\Dispatcher as FastRouteDispatcherInterface;
use FastRoute\RouteCollector;
use FastRoute\RouteParser\Std as RouteParser;
use RuntimeException;

use function array_shift;
use function chmod;
use function dirname;
use function file_put_contents;
use function is_dir;
use function is_writable;
use function mkdir;
use function rename;
use function restore_error_handler;
use function set_error_handler;

use const LOCK_EX;

class ErtuoDispatcher implements FastRouteDispatcherInterface, RuleInterface
{
	private const DIRECTORY_PERMISSIONS = 0775;
	private const FILE_PERMISSIONS = 0664;

	protected $dispatcher;

	protected $routes;

	/**
	* @param callable $routeDefinitionCallback
	* @param array $options
	*
	* @return self
	*/
	static function createDispatcher(callable $routeDefinitionCallback, array $options = [])
	{
		$options += [
			'routeParser' => RouteParser::class,
			'routeCollector' => RouteCollector::class,
			'routeTreeFile' => '/tmp/'
				. md5( (new \Exception)->getTraceAsString() )
				. '.php',
			];
print_r($options);
		// tree already present ?
		//
		$dispatcher = new self;
		if ($dispatcher->loadRoutes($options['routeTreeFile']))
		{
//			return $dispatcher;
		}

		// rebuild tree
		//
		$routeCollector = new $options['routeCollector'](
			new $options['routeParser'],
			new ErtuoDataGenerator
			);
		$routeDefinitionCallback($routeCollector);

		$tree = $routeCollector->getData();
		$dispatcher->writeRoutes($options['routeTreeFile'], $tree);
		$dispatcher->loadRoutes($options['routeTreeFile']);

		return $dispatcher;
	}

	protected function loadRoutes($routeTreeFile)
	{
		// [quote from FastRoute]: error suppression is faster than
		// calling `file_exists()` + `is_file()` + `is_readable()`,
		// especially because there's no need to error here
		//
		set_error_handler(static function() {});
		$routes = include $routeTreeFile;
		restore_error_handler();

		if ($routes instanceOf RouteAbstract)
		{
			$this->routes = $routes;
			return true;
		}

		return false;
	}

	protected function writeRoutes($routeTreeFile, $tree)
	{
		$directory = dirname($routeTreeFile);

		if (!is_dir($directory))
		{
			if (!mkdir($directory, self::DIRECTORY_PERMISSIONS, true))
			{
				throw new RuntimeException(
					"Unable to create directory: {$directory}"
				);
			}
		}

		if (!is_writable($directory))
		{
			throw new RuntimeException(
				"Directory not writable: {$directory}"
			);
		}

		$tmpFile = $routeTreeFile . '.tmp';

		$builderRig = (new Rig)->setTree($tree);
		$php = (new BuilderWithArrays)->buildTree( $builderRig );

		if (false === file_put_contents($tmpFile, $php, LOCK_EX))
		{
			throw new RuntimeException(
				"Unable to write file: {$tmpFile}"
			);
		}

		chmod($tmpFile, self::FILE_PERMISSIONS);

		if (!rename($tmpFile, $routeTreeFile))
		{
			throw new RuntimeException(
				"Unable to rename {$tmpFile} to {$routeTreeFile}"
			);
		}
	}

	function accept(string $step, array $options, Result $result) : bool
	{
		if (empty($step))
		{
			return false;
		}

		$regexp = array_shift($options) ?? '';
		if (!$regexp)
		{
			return false;
		}

		return preg_match("~{$regexp}~", $step);
	}

	function dispatch($httpMethod, $uri)
	{
		if (empty($this->dispatcher))
		{
			$this->dispatcher = new Dispatcher($this->routes);
			$this->dispatcher->getRules()->add('regexp', $this);
		}

		$source = Kit::quickExplode($uri);
		$result = $this->dispatcher->dispatch($source);
		print_r($result);

		$attributes = $result->attributes;
		if (!empty($attributes[ $httpMethod ])
			|| ('HEAD' == $httpMethod
				&& !empty($attributes[ 'GET' ])
				&& $httpMethod = 'GET'))
		{
			$handler = $attributes[ $httpMethod ];

			unset($attributes[ 'GET' ]);
			unset($attributes[ 'POST' ]);
			unset($attributes[ 'PUT' ]);
			unset($attributes[ 'DELETE' ]);
			unset($attributes[ 'HEAD' ]);
			unset($attributes[ 'OPTIONS' ]);

			return [self::FOUND, $handler, $attributes];
		}

		$allowedMethods = array();
		foreach ($attributes as $key => $value)
		{
			if (in_array($key, array(
				'GET', 'HEAD', 'POST',
				'PUT', 'DELETE', 'OPTIONS')))
			{
				$allowedMethods[] = $key;
			}
		}

		if ($allowedMethods)
		{
			return [self::METHOD_NOT_ALLOWED, $allowedMethods];
		}

        	return [self::NOT_FOUND];
	}
}
