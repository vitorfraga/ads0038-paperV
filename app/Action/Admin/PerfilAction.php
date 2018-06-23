<?php 

namespace App\Action\Admin;
use App\Action\Action as Action;

final class PerfilAction extends Action{


	public function index($request, $response){

		$vars['page'] = 'perfil/edit';
    	return $this->view->render($response, 'admin/template.phtml', $vars);

    	

	}

	public function store($request, $response){

		 
		$data = $request->getParsedBody();
		$name = filter_var($data['name'], FILTER_SANITIZE_STRING);
		$email = filter_var($data['email'], FILTER_SANITIZE_STRING);
		$password = filter_var($data['password'], FILTER_SANITIZE_STRING);

		$sql = "INSERT INTO users(name, email, password,created_at) VALUES (?,?,?,now())";
	    $conn= $this->db->prepare($sql);
        $conn->execute([$name, $email, $password]);

        return $this->view->render($response, 'admin/login/login.phtml');
		
	}

	public function edit($request, $response){

		$user_id = $_SESSION['id']; 
		$data = $request->getParsedBody();
		$name = filter_var($data['name'], FILTER_SANITIZE_STRING);
		$email = filter_var($data['email'], FILTER_SANITIZE_STRING);
		$password = filter_var($data['password'], FILTER_SANITIZE_STRING);

		$sql = "UPDATE users SET name = ?, email = ?, password = ?, updated_at = now()";
	    $conn= $this->db->prepare($sql);
        $conn->execute([$name, $email, $password]);

        $_SESSION['name']= $name;
		$_SESSION['email'] = $email;
		$_SESSION['password']= $password;

        return $response->withRedirect(PATH. '/admin');
		
	}

	

}

 ?>