<?php 

$app->get('/admin/login', 'App\Action\Admin\LoginAction:index');
$app->post('/admin/login', 'App\Action\Admin\LoginAction:logar');
$app->get('/admin/logout', 'App\Action\Admin\LoginAction:logout');

$app->post('/perfil', 'App\Action\Admin\PerfilAction:store');

// Administração
$app->group('/admin', function(){

	// Página inicial
	$this->get('', 'App\Action\Admin\HomeAction:index');

	// DataFrames

	// Rotas HTML
	$this->get('/dataframes', 'App\Action\Admin\DataFrameAction:index');// Lista os Dataframes

	$this->get('/dataframes/add', 'App\Action\Admin\DataFrameAction:add');
	$this->get('/dataframes/edit/{id}', 'App\Action\Admin\DataFrameAction:edit');
	$this->get('/dataframes/analytic/{id}', 'App\Action\Admin\DataFrameAction:analytic');
	$this->delete('/dataframes/delete/{id}', 'App\Action\Admin\DataFrameAction:delete');
	$this->put('/dataframes/edit/{id}', 'App\Action\Admin\DataFrameAction:update');// Edita o perfil;
	// // Rotas API/BANCO
	
	
	$this->post('/dataframes/add', 'App\Action\Admin\DataFrameAction:store');// Cria um dataframe;


	// Perfil

	// Rotas HTML
	$this->get('/perfil', 'App\Action\Admin\PerfilAction:index');// Entra na página de perfil;

	// Rotas API/Banco
	$this->put('/perfil', 'App\Action\Admin\PerfilAction:edit');// Edita o perfil;

})->add(App\Middleware\Admin\AuthMiddleware::class);



// Site
$app->get('/','App\Action\HomeAction:index');
$app->get('/contato','App\Action\HomeAction:contato');
$app->get('/cadastro','App\Action\HomeAction:cadastro');
$app->get('/meusarquivos','App\Action\HomeAction:meusarquivos');
$app->get('/quemsomos','App\Action\HomeAction:quemsomos');
