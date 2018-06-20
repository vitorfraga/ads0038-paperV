<?php 

namespace App\Action\Admin;
use App\Action\Action as Action;

final class PerfilAction extends Action{


	public function index($request, $response){

		$vars['page'] = 'perfil/edit';
    	return $this->view->render($response, 'admin/template.phtml', $vars);

    	

	}

}

 ?>