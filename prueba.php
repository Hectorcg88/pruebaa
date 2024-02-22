<?php
// Recibe los valores a sumar desde la URL
$valor1 = $_GET['valor1'] ?? 0;
$valor2 = $_GET['valor2'] ?? 0;

// Realiza la suma
$suma = $valor1 + $valor2;

// Devuelve el resultado
echo "La suma de $valor1 y $valor2 es: $suma";
echo "a";
echo "a";

?>