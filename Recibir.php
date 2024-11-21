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
    <div>
        <h1>FORMULARIO</h1>
        <h5>Complete las casillas</h5>
        <h6>&nbsp;</h6>
    </div>
    </nav>

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

<?php
if ($_POST){
    $correo = $_POST['correo'];

    if (!is_dir('mensaje')){
        mkdir('mensaje',0777);
    }

    $_POST['fecha']=date('Y-m-d H:i:s');
    $datos =json_encode($_POST);

    file_put_contents("mensaje/$correo.json", $datos);
}
?>
<div class="text-center">
    <h2> Formulario recibido</h3>
<a href="Listado.php" class="btn btn-primary">Listado</a>

</div>

</body>

</html>