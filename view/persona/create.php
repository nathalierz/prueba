
<?php
  include('../head/head.php');
?>

    <main>
      
      <form action="store.php" method="POST" autocomplete="off">
        <div class="container">
          <legend>Ingrese los datos en todos los campos</legend>
          <div class="row p-3">
            <div class="col-sm-4">
              <div class="form-floating">
              <input type="text" class="form-control" id="nombre" name="nombre" required onkeypress="return (event.charCode == 209 || event.charCode == 241 || event.charCode == 32 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" >
              <label for="floatingInputGrid">Nombre</label>
              <div class="form-text">Ingrese si acentos</div>
            </div>
            </div>
            <div class="col-sm-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="apepat" name="apepat" required onkeypress="return (event.charCode == 209 || event.charCode == 241 || event.charCode == 32 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" >
                <label for="floatingInputGrid">Apellido paterno</label>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-floating">
                <input type="text" class="form-control" id="apemat" name="apemat" required onkeypress="return (event.charCode == 209 || event.charCode == 241 || event.charCode == 32 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" >
                <label for="floatingInputGrid">Apellido materno</label>
              </div>
            </div>
          </div>
          <div class="row p-3">
            <div class="col-sm-1">
              <div class="form-floating">
              <input type="number" class="form-control" id="edad" name="edad" required max="150">
              <label for="floatingInputGrid">Edad</label>
            </div>
            </div>
            <div class="col-sm-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad", required onkeypress="return (event.charCode == 209 || event.charCode == 241 || event.charCode == 32 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" >
                <label for="floatingInputGrid">Nacionalidad</label>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-floating">
                <input type="text" class="form-control" id="ciudad" name="ciudad" required onkeypress="return (event.charCode == 209 || event.charCode == 241 || event.charCode == 32 || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" >
                <label for="floatingInputGrid">Ciudad de nacimiento</label>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-floating">
                <input type="tel" class="form-control" id="telefono" name="telefono" required minlength="10" maxlength="12" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
                <label for="floatingInputGrid">Número de teléfono</label>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-floating">
                <input type="text" class="form-control" id="rfc" name="rfc" required style="text-transform: uppercase;" minlength="13" maxlength="13" onkeypress="return (event.charCode != 32)">
                <label for="floatingInputGrid">RFC</label>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">GUARDAR</button>
          <a class="btn btn-danger" href="index.php">CANCELAR</a>
        </div>
      </form>


    </main>

<?php
  include('../head/footer.php');
?>

