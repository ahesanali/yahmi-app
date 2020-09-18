<?php
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\ErrorHandler\ErrorHandler;
use Symfony\Component\ErrorHandler\DebugClassLoader;

/*
|--------------------------------------------------------------------------
| Enable beatiful debug stack trace 
|--------------------------------------------------------------------------
|
| Enable beatiful debug trace in browser in development mode.
| We are using symfony error handler to print exception and error trace.
| The error stack trace is not available in production mode.
| Instead it will show custom error page.
|
*/
Debug::enable();

// or enable only one feature
//ErrorHandler::register();
//DebugClassLoader::enable();

/**
 * TODO:: Uncomment or use below code by detecting .env parameter 
 * to display custom error page when in production mode
 */
// If you want a custom generic template when debug is not enabled
// HtmlErrorRenderer::setTemplate('/path/to/custom/error.html.php');

// $filename = "Exception";
// $datetimeFormat = "dd-mm-yyyy";
// $data = ErrorHandler::call(static function () use ($filename, $datetimeFormat) {
//     // if any code executed inside this anonymous function fails, a PHP exception
//     // will be thrown, even if the code uses the '@' PHP silence operator
//     // $data = json_decode(file_get_contents($filename), true);
//     // $data['read_at'] = date($datetimeFormat);
//     // file_put_contents($filename, json_encode($data));
// 	$data = "";
//     return $data;
// });


/*
|--------------------------------------------------------------------------
| Start the applicaiton
|--------------------------------------------------------------------------
|
| The framework has started and it has bootsratpped. It
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../app/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Yahmi\Contracts\Http\Kernel::class);
$url = $_SERVER['REQUEST_URI'];
$response = $kernel->hanldeRequest($url);

// $auth_manager = app('auth_manager');
// var_dump($auth_manager );
// $is_authenticated = $auth_manager->performAuth("ahesanali","ahesan123");
// if($is_authenticated)
// 	var_dump("Yes, you are truely authenticated");

echo $response;
$kernel->flush();