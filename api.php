<?php
    header("Content-Type: application/json; charset:UTF-8");
    $_DATA = json_decode(file_get_contents("php://input"), true);


    // $_DATA = json_decode(file_get_contents("php://input"), true);
    // var_dump($_DATA)

    // Construir el algoritmo para un programa que ingrese tres
    // notas de un alumno, si el promedio es menor o igual a 3.9
    // mostrar un mensaje "Estudie“, de lo contrario un mensaje que
    // diga "becado"


        // $_DATA = json_decode(file_get_contents("php://input"), true);
        // $METHOD = $_SERVER["REQUEST_METHOD"];

        // function validacion($arg){
        //     return ($arg<=3.9) ? "Estudie" : "becado";
        // }
        // function algoritmo(float $nota, float $nota2, float $nota3){
        //     $promedio = ($nota+$nota2+$nota3)/3;
        //     return validacion($promedio);
        // }
        // try {
        //     $res = match($METHOD){
        //         "POST" => algoritmo(...$_DATA)
        //     };
        // } catch (\Throwable $th) {
        //     $res = "Error";
        // }

        // $mensaje = (array) [
        //     "mensaje"=> validacion($res),
        //     "notas"=> $_DATA,       
        //     "promedio"=> $res
        // ];

        // echo json_encode($mensaje,JSON_PRETTY_PRINT);



    // Dado un número indicar si es par o impar y si es mayor de 10.
    
        // function validacion($numero){
        //     if (($numero % 2) == 0) {
        //         return ($numero >= 10)? "El numero es par y mayor que 10": "El numero es par y menor que 10";
        //     }
        //     else {
        //         return ($numero >= 10)? "El numero es impar y mayor que 10": "El numero es impar y menor que 10";
        //     }
        // }

    // Construir el algoritmo para determinar el voltaje de un
    // circuito a partir de la resistencia y la intensidad de corriente.   
            
            function validacion($resistencia, $corriente){
                $voltaje = $resistencia * $corriente;
                return $voltaje;
            }

    echo (validacion(...$_DATA));
?>