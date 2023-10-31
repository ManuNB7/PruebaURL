<?php
    include '../clases/principal.php';

    $lugares= new Principal();

    $ip= $_GET['ip'];
    $resultado = $lugares->borrar($ip);
    echo "IP: $ip<br>";
    header("refresh:2; url=../vistas/eliminar.php");
?>