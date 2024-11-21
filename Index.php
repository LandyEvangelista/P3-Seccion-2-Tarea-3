<?php


define('pagina_actual', 'Inicio');

?>

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


    <nav class="container">
        </div>
        <h1>BIENVENIDOS A MI PERFIL </h1>
        <h5> Informacion personal </h5>
        <h6>&nbsp;</h6>

<!-- navbar con INICIO, FORMULARIO, LISTADO...-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?=(pagina_actual == '')? 'Active' : ''?>">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item <?=(pagina_actual == 'Formulario')? 'Active' : ''?>">
                <a class="nav-link" href="Formulario.php">Formulario</a>
            </li>
            <li class="nav-item <?=(pagina_actual == 'Listado')? 'Active' : ''?>">
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
        <h2> Datos del propietario</h2>
        <img src="img/img01.jpg" alt="Landy Evangelista" width="200" height="200">

        <p>Nombre: <strong>Landy Radhames Evangelista De Los Santos</strong></p>
        <p>Cedula: <strong>402-2576195-2</strong></p>
        <p>Matricula del ITLA: <strong>2022-0781</strong></p>
        <p>Correo: <strong>
            <a href="2022-0781@itla.edu.do"> 2022-0781@itla.edu.do </a>
        </div>
    </nav>

</body>
