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