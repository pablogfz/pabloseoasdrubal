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
<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';?>
