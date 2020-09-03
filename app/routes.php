<?php
use Yahmi\Routing\Router;

$router = new Router();
$router->setControllerBaseNameSpace(config('app.php','controller_namespace'));

$router->get('home','/',['controller'=>'IndexController','action' => 'index','middlewares'=>['FirstMiddleware']]);

// $router->get('title_list','/title_list',['controller'=>'CatalogueController','action' => 'getTitleList']);

// $router->get('edit_title','/edit_title/:title_id/project/:project_id',['controller'=>'CatalogueController','action' => 'editTitle']);

// $router->post('add_name','/add_name',['controller'=>'CatalogueController','action' => 'addName']);
$router->controller('CatalogueController');


return $router;