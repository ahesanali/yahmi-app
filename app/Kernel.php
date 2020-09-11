<?php
namespace App;

use Yahmi\Core\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
	/**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddlewares = [
        'first' => \App\Middlewares\FirstMiddleware::class,
        'second' => \App\Middlewares\SecondMiddleware::class,
    ];
}