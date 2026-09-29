<?php

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