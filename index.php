<?php
    include_once './vendor/autoload.php';

    use Invoker\Exception\NotCallableException;
    use Yahmi\Routing\RouteNotFoundException;
    use Yahmi\Routing\ControllerNotFoundException;
    use Yahmi\Routing\RequestURIPart;

    try{
    
        $base_dir = config('app.php','app_dir');

        $container = include_once __DIR__ . '/app/bootstrap.php';
        
        $controller_namespace = config('app.php','controller_namespace');
        $middleware_namespace = config('app.php','middleware_namespace');

        $url = $_SERVER['REQUEST_URI']; // /inspire-php-app/catalogue/titleList/34
        $request_action = substr($url,strlen($base_dir)); //  catalogue/titleList/34
        $parameters = [];
        
        if( empty($request_action) ){
            $request_action = "/";
        }
    
        $router = $container->get('router');
            
        $matchingRoute = $router->dispatch($request_action);
        $parameters = $matchingRoute->getRequestURI()->getParameters($request_action);
        $class_name = $controller_namespace.$matchingRoute->getController();
        $controller = $container->make($class_name);
        //Setting PHP-di dependancy container in controller
        $controller->setContainer($container);
        //invoke middleware before invoking controller action
        $middlewares = $matchingRoute->getMiddlewares();
        foreach($middlewares as $middleware){
            $middleware_class = $middleware_namespace.$middleware;
            $middleware = $container->make($middleware_class);
            call_user_func_array(array($middleware, 'run'),[]);    //as of now we are passing empty parameters letter on we will pass actual parameters
        }
        //invoking the controller
        call_user_func_array(array($controller, $matchingRoute->getActionMethod()),$parameters);
    //TODO:: Try to implement some fancy and nicely design stack trace for debug mode of application instead of this exception message	
    }catch(ControllerNotFoundException $cne){
        echo "Requested route not found. Cause:".$cne->getMessage();
    }catch(RouteNotFoundException $rne){
        echo "Requested route not found. Cause:".$rne->getMessage();
    }catch(NotCallableException $nce){
    	echo "Requested URL not found. Cause:".$nce->getMessage();
    	//echo "\n Reason:".$nce->getMessage();
    }

?>
