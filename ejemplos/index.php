<?php

// Asignación 
$num = 9;
$lang = [
  'es' => 'español',
  'en' => 'inglés',

];
// Aritmética 
echo "suma 2+2".((int) 2 + (int)2);
echo "resta 2-2".((int) 2 - (int)2);
echo "multiplica 2*2". 2 *2;
echo "divide 2/2". 2 / 2;
echo "Modulo 2%2". 2 % 2;
echo "Exponencial 2**2". 2 ** 2;

// Comparación

// Igual ==, valor '9' == 9 ->true
// Igual ===, valor - tipo 9 == 9 -> true

// Diferencias !=,valor
// Diferencias !=,valor - tipo
// <,>, <= >=

//Variables variables
$app = 'name';
$name = 'platzi';
echo $$app; // Platzi
echo $app; // name

