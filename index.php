<?php 
session_start();
error_reporting(E_ALL);
require 'vendor/autoload.php';
require 'config/constants.php';
require 'config/config.php';
$app = new \Slim\App(['settings' => $config]);
$container = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer('resources/views/');

$container['db'] = function ($c) {
    $db = $c['settings']['db'];
    $pdo = new PDO('pgsql:host=' . $db['host'] . ';dbname=' . $db['dbname'],
        $db['user'], $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

require 'app/Routes.php';
$app->run();

