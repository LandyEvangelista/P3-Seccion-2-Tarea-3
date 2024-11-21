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
        <h1>Politicas del Perfil </h1>
        <h5> REGLAS DE LA PAGINA </h5>
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


<div class="container mt-4">
    <h1>Políticas de este perfil</h1>
    <p>Bienvenido a la sección de políticas y  información sobre mi como estudiante</p>
    <p>Esta página fue diseñada con la finalidad de aprender a programar en php esta página no tiene ninguna finalidad en su funcionamiento sólo es un tema de demostración de habilidades aprendido en clase </p>
    <ul>
        <li>Respeto a todos mis compañeros y profesores de mi universidad.</li>
        <li>Hago todas mis asginaciones que me corresponde en el tiempo correspondiente.</li>
        <li>Utilizo todas las herramienta que me brinda la universidad.</li>
        <li>Me esforzo por cumplir con todas las normativas de la universidad.</li>
    </ul>
</div>

</body>
</html>
