<?php
namespace App\Middlewares;

use Yahmi\Middleware\Middleware;

class FirstMiddleware extends Middleware
{
     public function run($params = NULL)
     {
         echo "runnig the middleware ".__CLASS__;
         echo "/n/n";
         echo "--------After Middleware---------/n/n";
     }
}