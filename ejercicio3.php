<?php
$Nombres = 
[
"Garen", 
"Lux", 
"Mornaga", 
"Teemo"
];
foreach( $Nombres as $posicion =>$valor)
{
    $restoposicion = $posicion%2;
   
    if($restoposicion == 0)
    {
        print $valor;
    }else{
        print strrev($valor);

    }
print"\n";
}