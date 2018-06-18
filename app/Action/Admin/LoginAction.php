<?php 

namespace App\Action\Admin;
use App\Action\Action as Action;

final class LoginAction extends Action{


	public function index($request, $response){

		if(isset($_SESSION[PREFIX . 'logado'])){
			return $response->withRedirect(PATH. '/admin');

		}
    	return $this->view->render($response, 'admin/login/login.phtml');

    	

	}

	public function logar($request, $response){
		// Report all PHP errors
		error_reporting(E_ALL);

		// Same as error_reporting(E_ALL);
		ini_set('error_reporting', E_ALL);

		$data = $request->getParsedBody();
		$email = strip_tags(filter_var($data['email'], FILTER_SANITIZE_STRING));
		$senha = strip_tags(filter_var($data['senha'], FILTER_SANITIZE_STRING));

		if($email !='' && $senha != ''){

			$sql = "SELECT * FROM public.users WHERE email = '".$email."' AND password='".$senha."'";
			// exit($sql);
			$conn = $this->db;
			// $verificarNoBanco->execute();
			$nRows = $conn->query($sql)->fetchColumn();

			
			if($nRows>0){
				
				$_SESSION[PREFIX . 'logado']= true;
				return $response->withRedirect(PATH. '/admin');
			}else{
				
				$vars['erro'] = 'Você não foi encontrado no sistema';
				return $this->view->render($response, 'admin/login/login.phtml', $vars);

			}


		}else{

			$vars['erro'] = 'Preencha todos os campos';
			return $this->view->render($response, 'admin/login/login.phtml', $vars);

		}
		


	}

	public function logout($request, $response){

    	unset($_SESSION[PREFIX . 'logado']);
    	session_destroy();
    	return $response->withRedirect(PATH .'/admin/login');


	}

}

 ?>