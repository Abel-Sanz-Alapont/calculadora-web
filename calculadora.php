<?php

function sumar($a,  $b){
    return $a+ $b;

}

function restar($a, $b){
    return $a-$b;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$valor1 = isset($_POST['valor1']) ? (float)$_POST['valor1']:0;
$valor2 = isset($_POST['valor2']) ? (float)$_POST['valor2']:0;
    if (isset($_POST['sumar'])) {
        $resultado= sumar($valor1, $valor2);
        echo "El resultado de la suma es :".$resultado;
    }elseif(isset($_POST['restar'])){
        $resultado= restar($valor1, $valor2);
        echo "El resultado de la resta es :".$resultado;
    }else{
        echo "Haga click en el boton de suma(+) o resta(-)";
    }
}