<?php
    include '../clases/principal.php';
    include 'eliminar_modificar.php';

    header("refresh:5; url=eliminar_modificar.php");

    $lugares = new Principal();

    $ip = $_GET['ip'];
    $opcion = $_GET['opcion'];

    if ($opcion == 'eliminar') {
        $resultado = $lugares->borrar($ip);
        echo "IP: $ip<br>";
        echo "Borrar";
    }
    if ($opcion == 'modificar') {
        $resultado = $lugares->modificar($ip);
        echo "IP: $ip<br>";
        echo "Modificar";
    }
?>