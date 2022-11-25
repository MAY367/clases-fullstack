<?php
    require "funciones.php";
     
    $numero1 = readline("ingrese su primer numero: ");
    $numero2 = readline("ingrese su segundo numero: ");
    $operacion = readline("ingrese la operacion [ +, -, /, * ] ");

    switch($operacion)
    {
        case "+":   
            print suma($numero1, $numero2);
            break;

        case "-":
            print resta($numero1, $numero2);
            break;

        case "/":
            print divicion($numero1, $numero2);
            break;
        case "*":
            print multiplicacion($numero1, $numero2);
            break;
        default:
            print "no existe la operacion $operacion";
    }

