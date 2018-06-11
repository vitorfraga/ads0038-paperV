<?php 

require 'vendor/autoload.php';
require 'config/constants.php';
require 'config/config.php';

$app = new \Slim\App(['settings' => $config]);
$container = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer('resources/views/');
require 'app/Routes.php';
$app->run();

