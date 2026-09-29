<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $valor1 = $_POST['valor1']??0;
    $valor2 = $_POST['valor2']??0;
    $operacion = $_POST['operacion'] ?? "";
    

        if($valor1 != null && $valor2 != null){
            if($operacion == "multiplicar"){
                $resultado = $valor1*$valor2;
                
        
            }else if ($operacion == "dividir"){
                $resultado = $valor1/$valor2;
                
            }else if ($operacion == "sumar") {
                $resultado = $valor1 + $valor2;
                
            } elseif ($operacion == "restar") {
                $resultado = $valor1 - $valor2;
                
            } else {
                echo "operacion incorrecta";
            }
        }else{
            echo "Error parguela";

        }
    
        
    


    echo "Resultado: $resultado";
}
echo '<a href="index.html">Volver a la calculadora</a>';
