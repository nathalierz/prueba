<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php
        echo (empty($_GET['id']))
        ? ((strpos($_SERVER['REQUEST_URI'], 'create')) ? "Agregar registro" : "Index")
        : ((strpos($_SERVER['REQUEST_URI'], 'edit')) ? "Actualizar registro" : "Index");
      ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <!--Navegador-->

    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/prueba/index.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="/prueba/view/persona/index.php" id="ver">Ver registros</a>
            <a class="nav-link" href="/prueba/view/persona/create.php" id="registrar">Registrar nuevo</a>
          </div>
        </div>
      </div>
    </nav>