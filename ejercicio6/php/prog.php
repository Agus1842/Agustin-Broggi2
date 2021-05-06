<?php 

    $Nombre = $_POST['nombre'];
    $Apellido = $_POST['apellido'];
    $Dni = $_POST['dni'];
    $provincia = $_POST['formulario1'];
    $Correo = $_POST['correo'];
    $Estado = $_POST['estado'];

    if(isset($_POST['formulario1'])){
        echo $provincia;
    }

    echo "El nombre es:" ,$Nombre,"<br>";
    echo "El apellido es:" ,$Apellido,"<br>";
    echo "El nombre es:" ,$Dni,"<br>";
    echo "El nombre es:" ,$Correo,"<br>";

    if(isset($_POST['estado'])){
        echo "Es Donante";
    }else{
        echo "No es donante";
    }