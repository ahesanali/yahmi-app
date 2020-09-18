<?php



/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| This is application object serves as the container and available as Container for all
| Components of YAHMI framework
|
*/

$app = new Yahmi\Core\Application(
    dirname(__DIR__)
);
 
/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. 
|
*/

//adding router to container
$router = include_once __DIR__.'/routes.php';
//Adding other services to container like router as mentioned above
//$container->router = $router;
$app->instance(Yahmi\Routing\Router::class, $router);


/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(
    Yahmi\Contracts\Http\Kernel::class,
    App\Kernel::class
);

/**
 * If we have custom auth tables 
 * Otherwise you can remove thid bidning
 */
$app->extend('auth_manager', function ($service, $app) {
    return  new App\Models\Auth\AuthManager();
});

return $app;
