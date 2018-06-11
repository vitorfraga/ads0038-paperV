<?php 



// Administração

$app->get('/admin', 'App\Action\Admin\HomeAction:index');



// Site
$app->get('/','App\Action\HomeAction:index');
$app->get('/contato','App\Action\HomeAction:contato');
$app->get('/login','App\Action\HomeAction:login');
$app->get('/cadastro','App\Action\HomeAction:cadastro');
$app->get('/meusarquivos','App\Action\HomeAction:meusarquivos');
$app->get('/quemsomos','App\Action\HomeAction:quemsomos');
