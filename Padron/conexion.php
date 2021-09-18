<?php

    $mysqli = new mysqli("localhost","root","","padron");

    if($mysqli -> connect_errno){
        echo "Fallo al conectar a MYSQL: (".$mysqli -> connect_errno. ")" .$mysqli -> connect_error;
    }

    echo $mysqli->host_info . "\n";

?>