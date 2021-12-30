<?php

namespace Ertuo\Lab\Open\FastRoute;

use Ertuo\Kit;
use Ertuo\Route;
use FastRoute\DataGenerator as DataGeneratorInterface;

use function is_array;

class ErtuoDataGenerator implements DataGeneratorInterface
{
	const ROUTE = array(
		'name' => '',
		'attributes' => [],
		'rule' => ['', [], []],
		'default' => ['', []],
		'routes' => [],
		);

	protected $tree = self::ROUTE;

	function addRoute($httpMethod, $routeData, $handler)
	{
		$steps = array();
		foreach ($routeData as $data)
		{
			if (is_array($data))
			{
				$steps[] = $data;
				continue;
			}

			$current = Kit::quickExplode($data);
			foreach ($current as $step)
			{
				$steps[] = array($step, '');
			}
		}

		$last = null;
		$current =& $this->tree;
		foreach($steps as $step)
		{
			[$key, $regexp] = $step;

			$next = $regexp
				? ''
				: $key;

			if (!isset($current['routes'][$next]))
			{
				$current['routes'][$next] = self::ROUTE;
			}

			$last =& $current;
			$current =& $current['routes'][$next];
		}

		$http = [ $httpMethod => $handler ];

		if ($regexp)
		{
			unset($last['routes'][$key]);
			$last['routes'][''] = self::ROUTE;

			if ('[^/]+' == $regexp)
			{
				$last['name'] = $key;
				$last['rule'] = ['any', [], $http];
			} else
			{
				$last['name'] = $key;
				$last['rule'] = ['regexp', [$regexp], $http];
			}
		} else
		{
			$current['attributes'] = $http;
		}
	}

	function getData()
	{
		return $this->tree;
	}
}
