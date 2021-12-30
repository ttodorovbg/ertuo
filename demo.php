<?php include __DIR__ . '/vendor/autoload.php';

$dispatcher = Ertuo\Lab\Open\FastRoute\ErtuoDispatcher::createDispatcher(
function(FastRoute\RouteCollector $routes)
{
	$routes->addRoute('GET', '/addon', ['_route' => 'addon']);
	$routes->addRoute('GET', '/addon/linkers', ['_route' => 'addon_linkers']);
	$routes->addRoute('GET', '/addon/linkers/{linker_key}', ['_route' => 'addon_linkers_linker_key']);
	$routes->addRoute('GET', '/addon/linkers/{linker_key}/values', ['_route' => 'addon_linkers_linker_key_values']);
	$routes->addRoute('GET', '/addon/linkers/{linker_key}/values/{value_id}', ['_route' => 'addon_linkers_linker_key_values_value_id']);
	$routes->addRoute('GET', '/hook_events', ['_route' => 'hook_events']);
	$routes->addRoute('GET', '/hook_events/{subject_type}', ['_route' => 'hook_events_subject_type']);
	$routes->addRoute('GET', '/pullrequests/{selected_user}', ['_route' => 'pullrequests_selected_user']);

	// include '/home/kt/Projects/benchmark-php-routing/benchmark/fastroute-routes.php';
});

print_r($dispatcher->dispatch('GET', '/addon/linkers/ringo/values/george'));
