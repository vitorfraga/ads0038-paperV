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

$app->get('/contato', function ($request, $response) {

	$nome = $request->getAttribute('nome');
	$vars['page'] = 'contato';
    $response = $this->view->render($response, 'template.phtml', $vars);

    return $response;
});

$app->get('/login', function ($request, $response) {

	$nome = $request->getAttribute('nome');
	$vars['page'] = 'login';
    $response = $this->view->render($response, 'template.phtml', $vars);

    return $response;
});

$app->get('/meusarquivos', function ($request, $response) {

	$nome = $request->getAttribute('nome');
	$vars['page'] = 'meusarquivos';
    $response = $this->view->render($response, 'template.phtml', $vars);

    return $response;
});

$app->get('/quemsomos', function ($request, $response) {

	$nome = $request->getAttribute('nome');
	$vars['page'] = 'quemsomos';
    $response = $this->view->render($response, 'template.phtml', $vars);

    return $response;
});

$app->get('/cadastro', function ($request, $response) {

	$nome = $request->getAttribute('nome');
	$vars['page'] = 'cadastro';
    $response = $this->view->render($response, 'template.phtml', $vars);

    return $response;
});


$app->run();

