<?php 

namespace App\Action\Admin;
use App\Action\Action as Action;

final class DataFrameAction extends Action{


	public function index($request, $response){

		$vars['title'] = 'Meus arquivos';
		$vars['page'] = 'DataFrame/list';
    	return $this->view->render($response, 'admin/template.phtml', $vars);

    	

	}

}

 ?>