<?php 

    $Numero1 = $_POST['num1'];
    $Numero2 = $_POST['num2'];

    if($Numero1 > $Numero2){
        echo "El mayor es:" , $Numero1;
    }else{
        echo "El mayor es:" , $Numero2;
    }
