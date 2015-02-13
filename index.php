<?php
// RESTRICT ACCESS

// load commonly used constants
include 'constants.php';

// START THE APP
require './vendor/autoload.php';
require './vendor/illuminate/support/illuminate/support/helpers.php';
Illuminate\Support\ClassLoader::register();
$controllersDirectory = HOME_URL. 'Controllers';
$modelsDirectory = HOME_URL. 'Models';

//register those direcories  into autoloader with addDirectories();
Illuminate\Support\ClassLoader::addDirectories(array($controllersDirectory, $modelsDirectory));
$app = new Illuminate\Container\Container();
$app->bind('app', $app);

// also bind the base path for some helper methods to use
// Overcome the mental block, you can bind literally anything into the container
$app->bind('path.base', HOME_URL);
$app->bind('path.controllersDirectory', $controllersDirectory);
$app->bind('path.modelsDirectory', $modelsDirectory);

// set application instance on Facade class so the helper methods
// can know about current instance of application
Illuminate\Support\Facades\Facade::setFacadeApplication($app);

$app['app'] = $app;
$app['env'] = 'production';

with(new Illuminate\Events\EventServiceProvider($app))->register();
with(new Illuminate\Routing\RoutingServiceProvider($app))->register();

require 'routes.php';

$request = Illuminate\Http\Request::createFromGlobals();
$response = $app['router']->dispatch($request);

$response->send();

//start app manually with no routing this will be removed and transfered to routes.php
include BOOT;

?>