<?php
	require 'SQLGlobal2.php';

	if($_SERVER['REQUEST_METHOD']=='GET'){
		try{
			
			$respuesta = SQLGlobal::selectArray("select * from Evento");
			
			echo json_encode(array(
				
				"datos"=>
				
				$respuesta
				

			)

			);
		}catch(PDOException $e){
			echo json_encode(
				array(
					'respuesta'=>'-1',
					'estado' => 'Ocurrio un error, intentelo mas tarde',
					'data'=>'',
					'error'=>$e->getMessage())
			);
		}
	}     