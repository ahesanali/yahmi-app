<?php
namespace App\Middlewares;

use Yahmi\Middleware\Middleware;

class FirstMiddleware extends Middleware
{
     public function run($params = NULL)
     {
		 echo "<p>runnig the middleware ".__CLASS__."</p>";
         
         echo "<p>--------After Middleware---------</p>";
     }
}