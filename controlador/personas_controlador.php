<?php
    require_once("modelo/personas_modelo.php");
    $per = new personas_modelo();
    $datos = $per->get_personas();

    require_once("vistas/personas_vista1.php");
    echo "<br>";
    require_once("vistas/personas_vista2.php");
