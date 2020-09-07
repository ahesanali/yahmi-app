<?php
namespace App\Middlewares;

use Yahmi\Middleware\Middleware;

class SecondMiddleware extends Middleware
{
     public function run($params = NULL)
     {
         echo "<p>runnig the middleware ".__CLASS__."</p>";
         
         echo "<p>--------After Middleware---------</p>";
     }
}