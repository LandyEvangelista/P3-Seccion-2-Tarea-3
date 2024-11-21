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

    define('pagina_actual', 'Listado');
?>


    <nav class="container">
        </div>
        <h1>LISTAS DE FORMULARIOS</h1>
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
<h6>&nbsp;</h6>
<h3> FORMULARIOS RECIBIDOS</h3>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Mensaje</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $dir="mensaje";
        $archivos =scandir($dir);
        foreach ($archivos as $archivo) {
            if ($archivo!= "." && $archivo!= "..") {
                $archivo = $dir."/".$archivo;
                $datos =json_decode(file_get_contents($archivo));
                echo "<tr>";
                echo "<td>".$datos->nombre."</td>";
                echo "<td>".$datos->correo."</td>";
                echo "<td>".$datos->mensaje."</td>";
                echo "<td>".$datos->fecha."</td>";
                echo "</tr>";
            }
        }


        ?>
</table>

</body>
</html> 