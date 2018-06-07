<?php 

require 'vendor/autoload.php';
require 'config/constants.php';
require 'config/config.php';

$app = new \Slim\App(['settings' => $config]);

$container = $app->getContainer();

$container['view'] = new \Slim\Views\PhpRenderer('resources/views/');

// $app->get('/', function ($request, $response) {

//     $response = $this->view->render($response, 'template.phtml');

//     return $response;
// });


// Exemplo de rota que recebe as variáveis
$app->get('/', function ($request, $response) {

	$nome = $request->getAttribute('nome');
	$vars['page'] = 'home';
    $response = $this->view->render($response, 'template.phtml', $vars);

    return $response;
});


$app->run();

