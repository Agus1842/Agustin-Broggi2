<?php
    
    include 'config.php';

    $mysqli->query("SELECT * FROM users WHERE email=$email' 'AND pass");

    if($result = $mysqli(query("SELECT * FROM users WHERE email=$email' 'AND pass"))){
       while($fila = $resultado->fetch_row()){
         printf ("%s (%s)\n", $fila[0], $fila[1]);
       }
    }else{
        echo("El usuario no Existe");
    }
    
?>