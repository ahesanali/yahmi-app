<?php

use DI\ContainerBuilder;
use Yahmi\Queue\Queue;

//preparing objects
$queue = new Queue();

$containerBuilder = new ContainerBuilder;
$containerBuilder->addDefinitions(__DIR__ . '/../config/php-di-config.php');
$container = $containerBuilder->build();

//adding router to container
$router = include_once __DIR__.'/routes.php';

$container->set('router',$router);
//Adding other services to container like router as mentioned above
$container->set('queue',$queue);

return $container;