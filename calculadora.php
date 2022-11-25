<?php
    require "funciones.php";
     
    $numero1 = readline("ingrese su primer numero: ");
    $numero2 = readline("ingrese su segundo numero: ");
    $operacion = readline("ingrese la operacion [ +, -, /, * ] ");

    if($operacion == "+")
    {
        print suma($numero1, $numero2);

    }
    elseif($operacion == "-")
    {
        print resta($numero1, $numero2);

    }
    elseif($operacion == "/")
    {
        print divicion($numero1, $numero2);

    }
    elseif($operacion == "*")
    {
        print multiplicacion($numero1, $numero2);

    }
    else
    {
        print "operacion incorrecta $operacion";
    
    }

