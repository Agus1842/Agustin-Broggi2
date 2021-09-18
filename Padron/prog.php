<?php

    include('conexion.php');

    $dni=$_POST['DNI'];
    $genero=$_POST['sexo'];
    $prov=$_POST['provincia'];

    $query = "SELECT * FROM personas";
    $result -> $mysqli ->query($query);

    $numfilas = $result->num_rows;

    echo "El numero de filas es:" .$numfilas;