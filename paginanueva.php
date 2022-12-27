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
<button type="button" onclick='document.getElementById("funciononclic").innerHTML = "¡ESTÁ VIVO!"'>
Botón pequeñito</button>
<div id="selector1"></div>
<script>
document.getElementById("selector1").innerHTML = "¡PARDIEZ!"
</script>
<div class="selector5"></div>
<script>
document.getElementsByClassName("selector5")[0].innerHTML = "<h2>¡SAPRISTI!</h2>";
</script>
<div class="selector2"></div>
<div class="selector2"></div>
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
<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';?>
