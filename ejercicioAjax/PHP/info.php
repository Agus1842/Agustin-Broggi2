<?php 
    //paises en la lista 
    $pais = $_POST['paises'];

    //provincias de argentina
    $pro_argentina = array("Buenos Aires","Catamarca","Chaco","Chubut","Cordoba","Corrientes","Entre Rios","Formosa","Jujuy","La Pampa","La Rioja","Mendoza","Misiones","Neuquen","Rio Negro","Salta","San Juan","San Luis","Santa Cruz","Santa Fe","Santiago del Estero","Tierra del Fuego","Tucuman");

    //provincias de uruguay
    $pro_uruguay = array("Artigas","Canelones","Cerro Largo","Colonia","Durazno", "Durazno","Florida","Lavalleja","Maldonado","Montevideo","Paysandu","Rio Negro","Rivera","Rocha","Salto","San Jose","Soriano", "Tacuarembo","Treinta y Tres");

    // el pais seleccionado enviara el array
    if ($pais=="argentina") {
        echo json_encode($pro_argentina);
    }else {
        echo json_encode($pro_uguguay);
    }
