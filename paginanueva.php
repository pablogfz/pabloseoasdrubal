<?php
define ("pagina", "paginanueva");
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';?>
<?php echo "Prueba noscript"?>
<noscript> Prueba a ver qué pasa si pones un noscript <?php echo "Prueba noscript";?></noscript>
<h1 id="javascript1"></h1>
<script type="text/javascript">document.getElementById("javascript1"). innerHTML = "H1 con javascript";</script>
<h1 id="averaver"></h1>
<script src="/scripts/pruebas.js"></script>
<p id="funciononclic">Función onclic</p>
<button type="button" onclick='document.getElementById("funciononclic").innerHTML = "¡ESTÁ VIVO!" + testo + malditojs + cosas [2] + clas.nombre + (numeros - 2) + (numeros1 - 4) + (numeros1 / 2) + (numeros1 - 1)';>
Botón pequeñito</button>
<div id="selector1"></div>
<script>
let ejemplo = 'Variable con let';
var testeo = 'Variable con var';
testo = ' El 2023'
const malditojs = ' lo empiezo odiando las constantes de js';
let cosas = [' cosa1', ' cosa2', ' cosa azul'];
let clas = {nombre: ' con cosas ', alternativa: 'clas 3'}
let numeros = 4;
let numeros1 = 4;
let numeros2 = 4;
let numeros3 = 4;
document.getElementById("selector1").innerHTML = "¡PARDIEZ!";
</script>
<div class="selector5">Hola</div>
<script>
document.getElementsByClassName("selector5")[0].innerHTML = "<h2>¡SAPRISTI!</h2>";
</script>
<div class="selector2">Hola2</div>
<div class="selector2">Hola2.1</div>
<h3>Seleccionado por una etiqueta con js</h3>
<script>
const collection = document.getElementsByClassName("selector2");
for (let i = 0; i < collection.length; i++) {
collection[i].innerHTML = "No entiendo esto del cero. Espera, a lo mejor lo que selecciona no es el nombre del elemento, sino su lugar";
}
</script>
<script>
document.getElementsByTagName("h3")[0].innerHTML = "<h2>Te convertí en h2, por listillo</h2>";
</script>
<h3 class="queryselector">queryselector</h3>
<script>
document.querySelector('.queryselector').outerHTML = "<h4 class='hola'>Te convertí en h4 con un queryselector</h4>";
</script>
<h3 class="prueba100" id="manolito">Prueba 100 </h3>
<h3 class="prueba100">Prueba 101 </h3>
<h3 class="prueba100">Prueba 102 </h3>
<h3 class="prueba100">Prueba 103 </h3>
<h3 class="prueba1001" id="demo2">Prueba 104</h3>
<h3 class="prueba100" id="demo">Piruletas</h3>
<script>
    /*
    const pinguino = document.querySelectorAll('.prueba100');
    for (let b = 0; i < pinguino.length; b++)
    {pinguino[b].setAttribute(".prueba100" , ".prueba101")}
        /*
    const collection = document.querySelectorAll('.prueba100');
    for (let i = 0; i < collection.length; i++)
    {collection[i].innerHTML = "esta es la prueba 1000";}


    // document.querySelector('.prueba100').innerHTML = '<h1 style="background:red; color:white">¿Prueba 1000?</h1>';

// Creo que esto es lo que querías hacer.
// Nunca redefinas una constante, llámala distinto
*/
 const lavidaesbella = document.querySelectorAll(".prueba100");
 for (let i = 0; i < lavidaesbella.length; i++) {
  lavidaesbella[i].classList.add("prueba101");
  lavidaesbella[i].classList.remove("prueba100");
}

  /*
  // Siempre hay muchas formas de hacer lo mismo en js.
  // Quita los: (/*) para probar que esta opción funciona también:
  // https://www.codingexercises.com/replace-all-instances-of-css-class-in-vanilla-js
    let a = document.getElementsByClassName( "prueba100" );
    [...a].forEach( x => x.className += " prueba101" );
    [...a].forEach( x => x.classList.remove("prueba100") );
    */
   </script>
<style>
    .prueba100{background:black;
    color: white;
text-align:center;}
.prueba10000{background:black;
    color: white;
text-align:center;}
    .prueba101{
    background: red;
    color: white;
    width: 75px;
    text-align: center;}
    .prueba1001{background:black;
    color: white;
text-align:center;}
    </style>
    
    <div id="prueba101" onclick="funcion1()" class ="prueba101">Y aquí la función</div>    
   
   <script>
    function funcion1(){
    document.getElementById('manolito').setAttribute("class", "prueba100");
    }
</script>
<div id="arriba"></div> 
<script>  
/* 
alert("Hello! I am an alert box!");*/
const pum = document.getElementsByClassName("prueba1001");
pum [0].innerHTML = "¡Esto no tiene sentido!";
</script>
<div id="prueba10000" class ="prueba10000">Y aquí la función2</div>   
 
<script>
const element = document.getElementById("prueba10000");
element.addEventListener("click", function() {
document.getElementById("demo").outerHTML = "<h3>demonios</h3>"});
</script>

<script>
let tiempo = new Date().getHours();
let arriba;
if (tiempo <10){arriba = "Madrugaches! Pasa, que aínda estamos a ";}
else if (tiempo <12){arriba = "Que xa pasou a leiteira, que estamos a ";}
else if (tiempo >15){
    arriba = "A funcionar, que aínda non fixeches nada en todo día e xa estamos a ";}
let dia;
switch (new Date().getDay()){
    case 0:
    dia = "Domingo"; 
break;
case 1:
    dia="luns";
break;
case 2:
    dia="martes";
    break;
case 3:
    dia="mércores";
    break;
case 4:
    dia="xoves";
    break;
case 5:
    dia="venres";
    break;
case 6:
    dia="sábado";
    break;
}
document.getElementById("arriba").innerHTML = "Anda! " + arriba + dia; 
</script>
<button onclick="nosvamos()">Nos vamos, nos vamos</button>

<script>
function nosvamos() {
  location.replace("https://carlos.sanchezdonate.com/redireccion-301-desde-sitebuilders/")
}
</script>
<script>
    /*
  window.location.href = "https://carlos.sanchezdonate.com/redireccion-301-desde-sitebuilders/";
</script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';?>
