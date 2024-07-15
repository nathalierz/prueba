<?php
  #Ejecuta el código para eliminar registro
  require_once("../../controller/personaController.php");

  $obj = new personaController();
  $obj->delete($_GET['id']);
?>