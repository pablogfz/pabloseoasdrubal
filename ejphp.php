<h1>Aquí vamos a hacer los ejercicios de php</h1>
<h2>Ejercicio 1</h2>
<h3>En este ejercicio creamos dos variables y las imprimimos en pantalla</h3>
<?php 
//String, que es una cadena de caracteres
$uno = "Variable 1";
// Integer, que significa número entero
$dos = 333;
echo "Así imprimimos los valores de la variable uno:". $uno."<br>";
echo "Y, así imprimimos los valores de la variable dos:". $dos;
?>
<h2>Ejercicio 2</h2>
<h3>En este ejercicio escribimos un programa que imprima por pantalla los cuadrados de los primeros 10 números naturales</h3>
<?php
//Vamos a tener que hacer un script con un bucle for que vaya de cero a 10 y que, en cada interacción del bucle, multiplicamos cada número por si mismo
for ($i = 1; $i <= 10; $i++){
echo ($i*$i)."<br>";
}
?>
<h2>Ejercicio 3</h2>
<h3>Modificar el ejercicio anterior para que muestre si el número es par o impar</h3>
<?php
for ($i = 1; $i <= 10; $i++){
$cuadrado = $i*$i;
echo ($i*$i);
if ($cuadrado % 2== 0){
    echo " este es par";
} else{ echo " este es impar";
}
echo "<br>";
}
?>
<h2>Ejercicio 4. Bucle while</h2>
<h3>Escribe un programa que multiplique los primeros 20 números naturales</h3>
<?php
$numero =1;
$contador = 2;
while ($contador <= 20){
    //$numero = $numero multiplicado por $contador -- esta es una explicación de lo que ves debajo
$numero*= $contador;
echo $numero. "<br>";
$contador++;
}
echo "Este es el ejercicio cuatro, y este es el resultado ".$numero;
?>
<h2>Ejercicio 5: Condicionales y bucles, variables GET, ¿existe?, ¿es un número?</h2>
<h3>Imprimir por pantalla la tabla de multiplicar del número pasado en un parámetro GET por la URL</h3>
<?php
if(isset($_GET ["numero"]) && is_numeric($_GET["numero"])){
$numero = $_GET["numero"];
}else{
$numero = 3;
echo "<p>3 es el número por defecto</p>";
}
echo "Tabla de multiplicar del " .$numero."<br>";
for($i = 1; $i <= 10; $i++){
echo $i." x ".$numero." = ". ($i*$numero). "<br>";    
}
?>
<h2>Ejercicio 6: Crear un array llamado meses y que almacene el nonmbre de los 12 meses del año</h2>
<h3>Recorrerlo con FOR para mostrar por pantalla los doce meses</h3>
<?php
//un array es una colección de valores con un único nombre almacenados en forma de matriz. Cada dato se va a almacenar en una posición concreta como un índice al que podremos acceder
$meses = array("enero ", "febrero ", "marzo ", "abril ", "mayo ", "junio ", "agosto ", "septiembre ", "octubre ", "noviembre ", "diciembre ");
for($i = 0; $i < count($meses); $i++){
echo $meses[$i]. "<br>";
}
//echo count($meses);
?>
<h2>Ejercicio 7: El bucle Foreach</h2>
<h3>Sobre los datos el ejercicio anterior</h3>
<?php
//un array es una colección de valores con un único nombre almacenados en forma de matriz. Cada dato se va a almacenar en una posición concreta como un índice al que podremos acceder
$meses = array("enero ", "febrero ", "marzo ", "abril ", "mayo ", "junio ", "agosto ", "septiembre ", "octubre ", "noviembre ", "diciembre ");
foreach ($meses as $mes){
echo $mes. "<br>";
}
?>
<h2>Ejercicio 8: El factorial de un número</h2>
<h3>Escribir un programa que calcule el factorial de cualquier número almacenado en una variable</h3>
<p>El factorial de un número entero N es una operación matemática que consiste en multiplicar todos los factores N x (N-1) x (N-2) ... x1. Así, el factorial de 5 (escrito como 5!) es igual a: 5!= 5 x 4 x 3 x 2 x 1 = 120
<?php
$factorial = 1;
$numero = 5;
for($cont = 1; $cont<= $numero; $cont++){
    //$factorial = $factorial * $cont;
    $factorial *=$cont;
}
echo "<br>El factorial de ".$numero." es ".$factorial;
?>