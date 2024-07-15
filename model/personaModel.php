<?php
	/**
	 * Modelo para la bd
	 */
	class personaModel{
		private $PDO;
		
		public function __construct(){
			include("../../config/db.php");
			$con = new db();
			#Para crear la conexión
			$this->PDO = $con->conexion();
		}
		
		public function insert($nombre, $apepat, $apemat, $edad, $nacionalidad, $ciudad, $telefono, $rfc){
			$stament=$this->PDO->prepare("INSERT INTO persona VALUES (NULL, :nombre,:apellidopa,:apellidoma,:edad,:nacionalidad,:ciudad,:telefono,:rfc)");
			$stament->bindParam(":nombre",$nombre);
			$stament->bindParam(":apellidopa",$apepat);
			$stament->bindParam(":apellidoma",$apemat);
			$stament->bindParam(":edad",$edad);
			$stament->bindParam(":nacionalidad",$nacionalidad);
			$stament->bindParam(":ciudad",$ciudad);
			$stament->bindParam(":telefono",$telefono);
			$stament->bindParam(":rfc",$rfc);
			return($stament->execute()) ? $this->PDO->lastInsertId() : false;
			# si la conexión se cumple retorna el último ID inserado
			# en caso contrario
		}

		#Para mostrar datos de un ID
		public function show($id){
			$stament = $this->PDO->prepare("SELECT * FROM persona where id_persona = $id");
			# si la consulta se ejecuta, retorna un valor de tipo arreglo , en caso contrario retorna false 
			return ($stament->execute()) ? $stament->fetch() : false; 
		}

		#Para mostrar todos los registros
		public function index(){
			$stament = $this->PDO->prepare("SELECT * FROM persona");
			# si la consulta se ejecuta, retorna todos los registros, en caso contrario retorna false
			return ($stament->execute()) ? $stament->fetchAll() : false;
		}

		#Para actualizar registros
		public function update($id, $nombre, $apepat, $apemat, $edad, $nacionalidad, $ciudad, $telefono, $rfc){
			$stament = $this->PDO->prepare("UPDATE persona SET nombre = :nombre, apellido_paterno = :apellidopa, apellido_materno = :apellidoma, edad = :edad,nacionalidad = :nacionalidad, ciudad = :ciudad, telefono = :telefono , rfc = :rfc WHERE id_persona = :id");
			$stament->bindParam(":nombre",$nombre);
			$stament->bindParam(":apellidopa",$apepat);
			$stament->bindParam(":apellidoma",$apemat);
			$stament->bindParam(":edad",$edad);
			$stament->bindParam(":nacionalidad",$nacionalidad);
			$stament->bindParam(":ciudad",$ciudad);
			$stament->bindParam(":telefono",$telefono);
			$stament->bindParam(":rfc",$rfc);
			$stament->bindParam(":id", $id);

			return ($stament->execute()) ? $id : false;
		}
		#Para eliminar un registro
		public function delete($id){
			$stament = $this->PDO->prepare("DELETE FROM persona WHERE id_persona = :id");
			$stament->bindParam(":id", $id);

			return ($stament->execute()) ? true : false; 
		}

	}
?>