<?php

function sumar($a,  $b)
{
    return $a + $b;
}

function restar($a, $b)
{
    return $a - $b;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valor1 = isset($_POST['valor1']) ? (float)$_POST['valor1'] : 0;
    $valor2 = isset($_POST['valor2']) ? (float)$_POST['valor2'] : 0;

    $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : '';

    if ($operacion == "sumar") {
        $resultado = $valor1 + $valor2;
        echo "Resultado de la suma es:" . $resultado;
    } elseif ($operacion == "restar") {
        $resultado = $valor1 - $valor2;
        echo "Resultado de la resta es:" . $resultado;
    } else {
        echo "operacion incorrecta";
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $valor1 = $_POST['valor1']??0;
    $valor2 = $_POST['valor2']??0;
    $operacion = $_POST['operacion'] ?? "";
    echo "Ha calculado";

    if($operacion == "multiplicacion"){
        $resultado = $valor1*$valor2;
        

    }else if ($operacion == "division"){
        $resultado = $valor1/$valor2;
        
    }else{
        $resultado = 0;
    }

    echo "Resultado: $resultado";
}
