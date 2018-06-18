<?php 





$app->get('/admin/login', 'App\Action\Admin\LoginAction:index');
$app->post('/admin/login', 'App\Action\Admin\LoginAction:logar');
$app->get('/admin/logout', 'App\Action\Admin\LoginAction:logout');

// Administração
$app->group('/admin', function(){

	// Página inicial
	$this->get('', 'App\Action\Admin\HomeAction:index');

	// DataFrames
	$this->get('/dataframes', 'App\Action\Admin\DataFrameAction:index');

})->add(App\Middleware\Admin\AuthMiddleware::class);



// Site
$app->get('/','App\Action\HomeAction:index');
$app->get('/contato','App\Action\HomeAction:contato');
$app->get('/cadastro','App\Action\HomeAction:cadastro');
$app->get('/meusarquivos','App\Action\HomeAction:meusarquivos');
$app->get('/quemsomos','App\Action\HomeAction:quemsomos');
