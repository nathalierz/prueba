<?php
  require_once("../head/head.php");
  require_once("../../controller/personaController.php");

  $obj = new personaController();
  $data = $obj->show($_GET['id']); # Recibe el arreglo de acuerdo al id_persona
  
?>

    <main>
      
      <form action="update.php?id=<?=$data[0]?>" method="POST" autocomplete="off">
        <div class="container text-center">
          <legend>Ingrese los datos en todos los campos a modificar</legend>
          <div class="row p-3">
            <div class="col-sm-4">
              <div class="form-floating">
              <input type="text" class="form-control" id="nombre" name="nombre" value="<?=$data[1]?>" required onkeypress="return (event.charCode == 209 || event.charCode == 241 || event.charCode == 32 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))">
              <label for="floatingInputGrid">Nombre</label>
            </div>
            </div>
            <div class="col-sm-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="apepat" name="apepat" value="<?=$data[2]?>" required onkeypress="return (event.charCode == 209 || event.charCode == 241 || event.charCode == 32 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" >
                <label for="floatingInputGrid">Apellido paterno</label>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="apemat" name="apemat" value="<?=$data[3]?>" required onkeypress="return (event.charCode == 209 || event.charCode == 241 || event.charCode == 32 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))">
                <label for="floatingInputGrid">Apellido materno</label>
              </div>
            </div>
          </div>
          <div class="row p-3">
            <div class="col-sm-1">
              <div class="form-floating">
              <input type="number" class="form-control" id="edad" name="edad" value="<?=$data[4]?>" required max="150">
              <label for="floatingInputGrid">Edad</label>
            </div>
            </div>
            <div class="col-sm-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" value="<?=$data[5]?>" required onkeypress="return (event.charCode == 209 || event.charCode == 241 || event.charCode == 32 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))">
                <label for="floatingInputGrid">Nacionalidad</label>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?=$data[6]?>" required onkeypress="return (event.charCode == 209 || event.charCode == 241 || event.charCode == 32 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))">
                <label for="floatingInputGrid">Ciudad de nacimiento</label>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-floating">
                <input type="tel" class="form-control" id="telefono" name="telefono" value="<?=$data[7]?>" required minlength="10" maxlength="12" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                <label for="floatingInputGrid">Número de teléfono</label>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-floating">
                <input type="text" class="form-control" id="rfc" name="rfc" value="<?=$data[8]?>" required style="text-transform: uppercase;" minlength="13" maxlength="13" onkeypress="return (event.charCode != 32)">
                <label for="floatingInputGrid">RFC</label>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
          <a class="btn btn-danger" href="index.php">CANCELAR</a>
        </div>
      </form>


    </main>

<?php
  include('../head/footer.php');
?>

