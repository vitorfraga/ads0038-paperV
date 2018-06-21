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

		$data = $request->getParsedBody();
		$titulo = filter_var($data['titulo'], FILTER_SANITIZE_STRING);
		$dataframe = filter_var($data['dataframe'], FILTER_SANITIZE_STRING);
		$titulo ='ok';
		$data = 'ok';
		$data = now();
	

		$sql = "INSERT INTO data_frames(titulo, data)VALUES('$titulo','$data')";
		// exit($sql);
		$conn = $this->db;
		// $verificarNoBanco->execute();
		$nRows = $conn->query($sql)->fetchColumn();
		

	}

	public function edit($request, $response){

		$vars['title'] = 'Alterar Dataframe';
		$vars['page'] = 'DataFrame/edit';
    	return $this->view->render($response, 'admin/template.phtml', $vars);

    	

	}


}

 ?>