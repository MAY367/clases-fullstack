<?php

$listaNombres =["nombre1","nombre2","nombre3","nombre4"];
foreach ( $listaNombres as $posicion => $nombre)  //recorremos el arrray
{
    if($Nombre =="nombre2") //se  prgunta si la variable $nombre es  igual a "nombre2"
    {
        //si se cumple la condicion
       print "hola" . $nombre ."estas  en esta pocision :" . $posicion .  PHP_EOL;
    } else {
        //si no se cumple la condicion
        print ". . ."  .  PHP_EOL ;
    }
}
