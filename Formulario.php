<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!--bootstrap.CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="<KEY>" crossorigin="anonymous">
</head>
<body>
<?php

    define('pagina_actual', 'Formulario');
?>
    <nav class="container">
        </div>
        <h1>FORMULARIO</h1>
        <h5> Complete las casillas</h5>
        <h6>&nbsp;</h6>
    
<!-- navbar con INICIO, FORMULARIO, LISTADO...-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?=(pagina_actual == '')? 'Active' : ''?>">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item<?=(pagina_actual == 'Formulario')? 'Active' : ''?>">
                <a class="nav-link" href="Formulario.php">Formulario</a>
            </li>
            <li class="nav-item<?=(pagina_actual == 'Listado')? 'Active' : ''?>">
                <a class="nav-link" href="Listado.php">Listado</a>
            </li>
            <li class="nav-item<?=(pagina_actual == 'Politicas')? 'Active' : ''?>">
                <a class="nav-link" href="PoliticasDePerfil.php">Politicas</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        </form>
    </div>
</nav>

<body>
    <nav class="container">
        </div>
        <h1>Agregue un formulario</h1>
    </nav>
</body>
<form action="Recibir.php" method="post">
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <small id= "helpId" class="text-muted">Escriba su nombre</small>
    </div>
    <div class="form-group">
        <label for= "correo">Correo</label>
        <input type="email" required name="correo" id="" placeholder="Correo">
        <small id= "helpId" class="text-muted">Escriba su correo</small>
        </div>
    <div class="form-group">
        <label for="mensaje">mensaje</label>
        <textarea class="form-control" name="mensaje" id="" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    
</form>
</html>