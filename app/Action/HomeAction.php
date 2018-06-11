<?php 

namespace App\Action;

final class HomeAction extends Action {



	public function index($request, $response){

		$vars['page'] = 'home';
    	return $this->view->render($response, 'template.phtml', $vars);

    	

	}

	public function cadastro($request, $response){

		$vars['page'] = 'cadastro';
    	return $this->view->render($response, 'template.phtml', $vars);

	}

	public function contato($request, $response){

		$vars['page'] = 'contato';
    	return $this->view->render($response, 'template.phtml', $vars);

	}

	public function login($request, $response){

		$vars['page'] = 'login';
    	return $this->view->render($response, 'template.phtml', $vars);

	}

	public function meusarquivos($request, $response){

		$vars['page'] = 'meusarquivos';
    	return $this->view->render($response, 'template.phtml', $vars);

	}

	public function quemsomos($request, $response){

		$vars['page'] = 'quemsomos';
    	return $this->view->render($response, 'template.phtml', $vars);

	}



}

 ?>