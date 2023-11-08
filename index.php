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

// ---------------------------
// Miercoles 08/11/23
// Arrays y Matrices
// ---------------------------

// Crear una array
// Usar funcion Array()

$lista = array('verduras', 'carne', 'fruta');
//                  0          1        2    ...
$lista2 = array(10 => 'verduras', 20 => 'carne', 30 => 'fruta');
//                      10                  20             30

$lista3 = array(
    2 => 'verduras',
    4 => 'carne',
    6 => 'fruta'
);

// Recoremos el array $lista3
foreach ($lista3  as $indice => $valor) {
    echo "$indice =  $valor";
}

// -------------------------------
// Añadir un elemento a un array()
// -------------------------------

/*  
Si no indicamos el indice en donde colocarlo
lo añade al final siguiendo la numeracion de los indices 
*/
$lista[] = 'pasar';  // indice 3
$lista[] = 'pescado'; // indice 4

// Recoremos el array $lista
foreach ($lista  as $indice => $valor) {
    echo "$indice =  $valor";
}

$lista2[] = 'pasta'; // indice 31
$lista2[0] = 'pescado'; // indice 0

// Como imprimir un array()
print_r($lista2);

// Eliminar un elemento de un array()
unset($lista2[0]);

// Borrar todos los elementos de $lista2
$lista2 = array();

// Combinar arrays
$array1 = array('verdura', 'carne', 'fruta');
$array2 = array('pasta', 'pescado');

$array3 = array_merge($array1, $array2);
echo $array3;

// Matrices (Arrays de 2 dimensiones)
$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

/* 
    1 2 3 
    4 5 6
    7 8 9

*/
// $matriz[fila][columna]
echo $matriz[2][1]; // 8

// Mostrar todos los campos de la matriz
for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        $valor = $matriz[$i][$j];
        echo "matriz[$i][$j] = $valor <br/>";
    }
}

// ---------------------------
// Metodos para ordenar arrays
// ---------------------------

// Metodo sort() - ordena alfabeticamente y no mantiene los indices
$alumno = array('patricia', 'juan', 'marta', 'alex', 'gerardo');
sort($alumno);
print_r($alumno);

// Metodo rsort()
// ordena de forma inversa y no mantiene los indices
$alumno = array('patricia', 'juan', 'marta', 'alex', 'gerardo');
rsort($alumno);
print_r($alumno);

// Metodo asort()
// ordena alfabeticamente y mantiene los indices de valor
$alumno = array('patricia', 'juan', 'marta', 'alex', 'gerardo');
asort($alumno);
print_r($alumno);

// Metodo asort()
// ordena y mantiene los indices de valor
$alumno = array('patricia', 'juan', 'marta', 'alex', 'gerardo');
arsort($alumno);
print_r($alumno);

// Metodo ksort()
// ordena los indices y mantiene la correlacion indice => valor
$alumno = array(2 => 'patricia', 1 => 'juan', 0 => 'marta', 4 => 'alex', 3 => 'gerardo');
ksort($alumno);
print_r($alumno);

// Metodo krsort()
// ordena de forma inveesa y mantiene los indices de valor
$alumno = array('patricia', 'juan', 'marta', 'alex', 'gerardo');
krsort($alumno);
print_r($alumno);

// ----------------------------------------
// TRANSFORMACIONES ENTRE CADENAS Y ARRAYS
// ----------------------------------------

// implode() => convierte un array en un cadena
$datos = array('imagen', 'email', 'telefono');
$cadena_datos = implode(' - ', $datos);
echo $cadena_datos;

// explode() => convierte una cadena en un array
$valores = "lunes-martes.miercoles";
$array_valores = explode(' - ', $valores);
echo $array_valores;
