<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

//While Symfony is bootstrapping, display errors
$existingPhpDisplayErrors = ini_get('display_errors');
ini_set('display_errors', 1);

/**
 * @var Composer\Autoload\ClassLoader
 */
$loader = require __DIR__.'/../app/autoload.php';
include_once __DIR__.'/../var/bootstrap.php.cache';

require __DIR__.'/../symfony-env.php';


$symfonyEnv = symcore_get_symfony_env();

$debug = symcore_get_debug($symfonyEnv);

// Enable APC for autoloading to improve performance.
// You should change the ApcClassLoader first argument to a unique prefix
// in order to prevent cache key conflicts with other applications
// also using APC.
/*
$apcLoader = new Symfony\Component\ClassLoader\ApcClassLoader(sha1(__FILE__), $loader);
$loader->unregister();
$apcLoader->register(true);
*/

if ($debug)
{
	Debug::enable();
}

//Now restore this to what it was at the start of the script
ini_set('display_errors', $existingPhpDisplayErrors);


$kernel = new AppKernel($symfonyEnv, $debug);
$kernel->loadClassCache();
//$kernel = new AppCache($kernel);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
