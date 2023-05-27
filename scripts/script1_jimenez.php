<?php

/**
 * Esto es un ejemplo de documentación de PHP
 * 
 * @author Moisés
 * @version 1.0.2
 *
 */

/**
 * Esta función devuelve la suma de los argumentos
 * enviados en la llamada 
 * 
 * @version 1.0.2
 * @param integer $num1 primer número a sumar
 * @param integer $num2 segundo número a sumar
 * @return integer resultado de la suma de los números enteros
 *
 */
function suma($num1, $num2)
{
    return $num1 + $num2;
}

/**
 * Esta función devuelve la resta de los argumentos
 * enviados en la llamada
 * 
 * @version 1.0.2
 * @param integer $num1 primer número a restar (minuendo)
 * @param integer $num2 segundo número a restar (sustraendo)
 * @return integer resultado de la resta de dos números enteros
 *
 */
function resta($num1, $num2)
{
    return $num1 - $num2;
}

/**
 * Esta función devuelve un saludo con el nombre que le
 * enviamos en la llamada
 * 
 * @version 1.0.2
 * @param string $nombre Es el nombre de la persona a la que saludamos
 * @return string Saludo a la persona solcitada
 */
function saluda($nombre)
{
    echo "Hola" . $nombre;
}

echo "Ejemplo de funciones en PHP</br>";

saluda(" Moisés");

echo "<br/>La diferencia entre 25 y 20 es: " . resta(25, 20);

echo "<br/>La suma de 25 y 20 es: " . suma(25, 20);

echo "<br/>Hasta pronto!!<br/>";

?>
