<?php 

namespace App\Action\Admin;
use App\Action\Action as Action;

final class HomeAction extends Action{


	public function index($request, $response){

	
    	return $this->view->render($response, 'admin/home.phtml');

    	

	}

}

 ?>