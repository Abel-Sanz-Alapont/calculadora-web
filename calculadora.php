<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $valor1 = $_POST['valor1']??0;
    $valor2 = $_POST['valor2']??0;
    echo "Ha calculado";

    if(isset($_POST['multiplicar'])){
        $resultado = $valor1*$valor2;
        echo "El resultado es $resultado";

    }else if (isset($_POST['dividir'])){
        $resultado = $valor1/$valor2;
        echo "El resultado es $resultado";
    }
}