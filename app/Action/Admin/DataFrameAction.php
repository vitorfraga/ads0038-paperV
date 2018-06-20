<?php 

namespace App\Action\Admin;
use App\Action\Action as Action;

final class DataFrameAction extends Action{


	public function index($request, $response){

		$vars['title'] = 'Meus arquivos';
		$vars['page'] = 'DataFrame/list';
    	return $this->view->render($response, 'admin/template.phtml', $vars);

    	

	}

	public function add($request, $response){

		$vars['title'] = 'Meus arquivos';
		$vars['page'] = 'DataFrame/add';
    	return $this->view->render($response, 'admin/template.phtml', $vars);

    	

	}


	public function store($request, $response){

		$vars['title'] = 'Novo Dataframe';
		$vars['page'] = 'DataFrame/add';
    	return $this->view->render($response, 'admin/template.phtml', $vars);

    	

	}

	public function edit($request, $response){

		$vars['title'] = 'Alterar Dataframe';
		$vars['page'] = 'DataFrame/edit';
    	return $this->view->render($response, 'admin/template.phtml', $vars);

    	

	}


}

 ?>