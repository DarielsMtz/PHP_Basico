<?php

// Comentarios de una linea

/*
    Comentario multilinea
*/

// Variables
$var = "aaa";
$var = 5;

echo "El valor de la varieble vale $var <br>";  // Podemos usar $var
echo 'EL valor de la variable vale $var <br>';  // Muestra literalmente el texto

// Constantes
define("NUM", 42);
echo "<br>La constante num vale " . NUM;

// Numeros
$a = 3;
$b = 3.14;

// *** Operadores ***

// Aritmeticos
// +, -, *, /, %
$c = $a + $b;
echo "<br>" . $c;

// Comparacion
// ==, !=, <=, >=, >, >=
$c = $a > $b;
echo "<br>" . $c;

// Logicos
//&&, ||, !

$c = ($a < $b) && ($b > 1);
echo "<br>" . $c;


// Incremento y decremento
$var = 20;

$var++;
echo "<br>" . $var;
$var--;
echo "<br>" . $var;


// Dar formato a un numero

// round()
echo "<br>" . round(4.30);
echo "<br>" . round(4.291832, 4);

// number_format()
echo "<br>" . round(428.4959, 2);
echo "<br>" . round(1001.677, 2);


// Numeros aleatorios
$aleatorio = rand(100, 250);
echo "<br>" . $aleatorio;

$aleatorio2 = rand(100, 250) / 10;
echo "<br>" . $aleatorio2;

// Cadenas en PHP
echo "<br> Hola", " Mundo!"; // Forma 1
echo "<br> Hola" . " Mundo!"; // Forma 2

$cad1 = "Hola";
$cad2 = "Mundo!";
echo "<br>" . $cad1 . $cad2;

// Funciones de cadena PHP

// strtok()
$cadena = "Pedro Vera";
echo "<br>" . $cadena;

$nombre = strtok($cadena, ' ');
echo "<br>" . $nombre;

$apellido = strtok(' '); // Continua desde donde se ha quedado
echo "<br>" . $apellido;

// substr()
$oracion = " porque no re callas";

$frase = substr($oracion, 0, 4);
echo "<br>" . $frase;

$frase2 = substr($oracion, -4, 3);
echo "<br>" . $frase2;

// strlen()
echo "<br>" . strlen($oracion);

// str_word_length()
echo "<br>" . str_word_count($oracion);

// strcmp()

$var1 = "pepe";
$var2 = "pep";
/* 
Retornara 0, si $var1 == $var2
Retoenara 1, si $var1 > $var2
Retornara -1, si $var1 < $var2
*/

echo "<br>" . strcmp($var1, $var2); // Sumara el valor en decimal de los caracteres de la cadena

// strcasecmp(), le da igual si es mayuscula o minuscula

$var1 = "pepe";
$var2 = "pep";
/* 
Retornara 0, si $var1 == $var2
Retoenara 1, si $var1 > $var2
Retornara -1, si $var1 < $var2
*/

echo "<br>" . strcmp($var1, $var2); // Sumara el valor en decimal de los caracteres de la cadena


// strstr()
$oracion = "Egipto es un caos.Dijo el periodista";
$aguja = ".";

$resultado = strstr($oracion, $aguja);
echo "<br>"  . $resultado;

// strpos()
$oracion = "Egipto es un caos.Dijo el periodista";
$aguja = ".";

$resultado = strpos($oracion, $aguja);
echo "<br>"  . $resultado;

// Formato de cadenas PHP
$oracion =  "egipto es un caos.Dijo el periodista";
echo "<br>" . ucfirst($oracion);
echo "<br>" . ucwords($oracion);
echo "<br>" . strtoupper($oracion);
echo "<br>" . strtolower($oracion);