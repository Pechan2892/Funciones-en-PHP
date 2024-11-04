<?php 
// solucion a problemas basicos en php
//Autor :Edwin rivas
//Fecha : 24/06/2020

//funciones paragerar la serie Fibonaci
function generarFibonacci($n){

    //validamos si el numero de terminos solicitado es mayor o igual a 1
    if($n <=0){
        return[];//si no es valido, regresa un arreglo vacia

    }
    //inicializamos la serie con los dos primeros terminos 0 y 1
    $serie = [0,1];

    //generamos la serie hasta el numero de terminos solicitado: 0 y 1
    for($i = 2; $i < $n; $i++){
        //el proximo termino es la suma de los dos anteriores
        $serie[] = $serie[$i - 1] + $serie[$i - 2];
    }
    return array_slice($serie, 0, $n);//regrasa los n primeros terminos de la serie


    //funcion para verificar si un numero es primo


    function esPrimo($nuemro){
        //los numeros menores o iguales a 1 no son primos
        if($nuemro % $i == 0){
            return false;
    }

}
   return true;//si no se encuentra un divisor, el numero es primo 

//funcion para verificar si una cadena es un palindromo
function esPalindromo($cadena){

    //convertimos la cadena a minusculas y eliminanos los espacios para comparar de manera correcta
    $cadena = strtolower(str_replace('',' ',$cadena));
   
    //verificamos si la cadena es igual a su reverso
    return $cadena == strrev($cadena);
}
//ejemplos de uso de las funciones
$n = 10;//numero de terminos de las fibonacci
$nuemro = 17;//numero a verificar si es primo
$cadenaPalindromo = "Tres Tristes Tigres Comen Trigo En Un Trigal";//cadena a verificar si es palindromo

//mostramos los resultados
echo "Serie Fibonacci de $n terminos: ".implode(", ",generarFibonacci($n))."<br>";
echo "¿Es $numero primo?:".(esPrimo($nuemro)?"Si":"No")."<br>";
echo "¿Es $cadenaPalindromo un palindromo?:".esPalindromo($cadenaPalindromo)?"Si":"No";

}


?>