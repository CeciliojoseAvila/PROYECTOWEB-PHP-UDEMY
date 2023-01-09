<?php
/*
$variable1 = "CECILIO JOSE";
$variable2 = "AVILA RAMOS";
    //echo "HOLA MUNDO, DESDE PHP";
    echo $variable1 . "" . $variable2; */
    
    /*define("numero1", 10);
    $numero1=2;
    $numero2=10;
    $suma = $numero1 + $numero2;
    echo $suma;*/
    //BUCLE
    $nombre = "CECILIO ";
    $array = array(1,2,3, "Casa", $nombre);

    $longitud = count($array);

    for ($i=0; $i<$longitud; $i++) { 
        # code...
        echo $array[$i];
        echo "<br>";
    }

    ?>