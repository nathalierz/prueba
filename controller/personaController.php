<?php
	class personaController{
		private $model;
		public function __construct(){
			include('../../model/personaModel.php');
			$this->model = new personaModel();

		}
		#Para guardar un registro
		public function store($nombre, $apepat, $apemat, $edad, $nacionalidad, $ciudad, $telefono, $rfc){
			$id = $this->model->insert($nombre, $apepat, $apemat, $edad, $nacionalidad, $ciudad, $telefono, $rfc);
			return ($id!=false) ? header("location:index.php") : header("location:create.php");
		}
		#Para mostrar un registro
		public function show($id){
			return ($this->model->show($id) != false) ? $this->model->show($id) :  header("location:index.php");
		}
		#Para mostrar todos los registros
		public function index(){
			return ($this->model->index()) ? $this->model->index() : false;
		}

		#Para actualizar un registro
		public function update($id, $nombre, $apepat, $apemat, $edad, $nacionalidad, $ciudad, $telefono, $rfc){
			return ($this->model->update($id, $nombre, $apepat, $apemat, $edad, $nacionalidad, $ciudad, $telefono, $rfc) != false) ? header("location:index.php") : header("location:index.php");
		}

		#Para eliminar un registro
		public function delete($id){
			return ($this->model->delete($id)) ? header("location:index.php") : header("location:index.php"); 
		}
	}
?>