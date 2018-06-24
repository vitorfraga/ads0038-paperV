<?php 


namespace App\Action\Admin;
use App\Action\Action as Action;


final class DataFrameAction extends Action{

	public function index($request, $response){

		$user_id = $_SESSION['id'];
		$sql = "SELECT * FROM data_frames WHERE user_id =".$user_id;
	   	$conn = $this->db;
		$nRows= $conn->query($sql)->fetchall();
        
        $vars['title'] = 'Meus arquivos';
		$vars['page'] = 'DataFrame/list';
		$vars['data'] = $nRows;

    	return $this->view->render($response, 'admin/template.phtml', $vars);

	}

	public function add($request, $response){

		$vars['title'] = 'Meus arquivos';
		$vars['page'] = 'DataFrame/add';
    	return $this->view->render($response, 'admin/template.phtml', $vars);

	}


	public function store($request, $response){

		$user_id =  $_SESSION['id']; 
		$data = $request->getParsedBody();
		$titulo = $_POST['titulo'];
		$dataframe = $_POST['data_frame_csv'];
		$sql = "INSERT INTO data_frames(titulo, data, user_id,created_at) VALUES (".$this->db->quote($titulo).",".$this->db->quote($dataframe).",".$this->db->quote($user_id).",now())";
		$conn= $this->db->prepare($sql);
        $this->db->exec($conn->queryString);
        $vars['title'] = 'Meus arquivos';
		$vars['page'] = 'DataFrame/list';
		return $response->withRedirect(PATH. '/admin/dataframes');

		
	}

	public function edit($request, $response, $args){
		$user_id = $_SESSION['id'];

		$sql = "SELECT * FROM data_frames WHERE user_id =".$user_id."AND id=".$args['id'];
	   	$conn = $this->db;
		$data= $conn->query($sql)->fetchall();
        $vars['data'] = $data;
        $vars['title'] = 'Meus arquivos';
		$vars['title'] = 'Alterar Dataframe';
		$vars['page'] = 'DataFrame/edit';
    	return $this->view->render($response, 'admin/template.phtml', $vars);

	}

	public function delete($request, $response, $args){

		$sql = "DELETE FROM data_frames WHERE id=".$args['id'];
	   	$conn = $this->db;
		$conn->query($sql)->fetchall();
		return $response->withRedirect(PATH. '/admin/dataframes');

	}

	public function update($request, $response, $args){

		$data = $request->getParsedBody();
		$titulo = filter_var($data['titulo'], FILTER_SANITIZE_STRING);
		$dataframe = filter_var($data['data_frame_csv'], FILTER_SANITIZE_STRING);
		if($dataframe!=''){

			$sql = "UPDATE data_frames SET titulo = ?,dataframe=? ,updated_at = now() WHERE id=".$args['id'];
	    	$conn= $this->db->prepare($sql);
        	$conn->execute([$titulo, $DataFrame]);


		}else{

			$sql = "UPDATE data_frames SET titulo = ?, updated_at = now() WHERE id=".$args['id'];
	    	$conn= $this->db->prepare($sql);
        	$conn->execute([$titulo]);

			
		}
        return $response->withRedirect(PATH. '/admin/dataframes');
	}

	public function analytic($request, $response, $args){
		$user_id = $_SESSION['id'];
		$sql   = "SELECT * FROM data_frames WHERE user_id =".$user_id."AND id=".$args['id'];
	   	$conn  = $this->db;
		$data  = $conn->query($sql)->fetchall();
		$data  = json_decode($data[0]['data'], true);

		$vars['title'] = 'Analytic';
		$vars['title'] = 'Análise do arquivo';
		$vars['page'] = 'DataFrame/view';
		$vars['matriz'] = $this->matriz($data);
    	return $this->view->render($response, 'admin/template.phtml', $vars);
		
		
	}

	public function matriz($data){

		$colunas = count($data[0]);
		$linhas = count($data);
		$x = ["linhas"=>$linhas, "colunas"=>$colunas];
		return $x;


	}






}

 ?>