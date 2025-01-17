<?php
	require 'Database2.php';

	class SQLGlobal2{
		function _construct(){
		}

		//Consulta para una lista de Registro
		public static function selectArray($consulta){
			$resultado = Database::getInstance()->getDb()->prepare($consulta);
			$resultado->execute();
			return $resultado->fetchAll(PDO::FETCH_ASSOC);
		}

		//Consulta para una lista de Registro con filtros
		public static function selectArrayFiltro($consulta,$datos){
			$resultado = Database::getInstance()->getDb()->prepare($consulta);
			$resultado->execute($datos);//array de datos, la posicion de los '?' debe ser en el mismo orden de la posicion de los elementos del array
			return $resultado->fetchAll(PDO::FETCH_ASSOC);
		}

		//Consultar solo un registro
		public static function selectObject($consulta){
			$resultado = Database::getInstance()->getDb()->prepare($consulta);
			$resultado->execute();
			return $resultado->fetch(PDO::FETCH_ASSOC);//fetch devuelve solo un registro
		}

		//Consultar solo un registro con filtros
		public static function selectObjectFiltro($consulta,$datos){
			$resultado = Database::getInstance()->getDb()->prepare($consulta);
			$resultado->execute($datos);//array de datos, la posicion de los '?' debe ser en el mismo orden de la posicion de los elementos del array
			return $resultado->fetch(PDO::FETCH_ASSOC);//fetch devuelve solo un registro
		}

		//Create Update Delete
		public static function cud($consulta){
			$sentencia = Database::getInstance()->getDb()->prepare($consulta);
			return $sentencia->execute(); //devuelve el numero de filas afectads
		}

		//Create Update Delete con Filtro
		public static function cudFiltro($consulta,$datos){
			$sentencia = Database::getInstance()->getDb()->prepare($consulta);
			return $sentencia->execute($datos); //devuelve el numero de filas afectadas
		}

	}
	
?>