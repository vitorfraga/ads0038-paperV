<?php 



	function select($tabela=null,$condicao=null){

		$sql = "SELECT * FROM ".$tabela;

		if($condicao!=null){

			$colunas = array_keys($condicao);
			$valores = array_values($condicao);
		}



	}	

	function insert($tabela=null, $atributos=null){

		error_reporting(E_ALL);
		$atributos = implode(",", array_keys($atributos));
		$sql .= "INSERT INTO ".$tabela." (".$atributos.")";
		echo $sql;
		// $sql = $this->db->prepare("INSERT INTO `data_frames`"."(".$atributos.")");



		
		
	}

	function update($tabela=null, $valores=null, $id=null){
		 echo 'ok';

	}

	 function delete($tabela=null, $id=null){
		echo 'ok';
		 

	}

	
	

