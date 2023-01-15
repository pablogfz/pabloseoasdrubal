<?php 
define ("pagina", "basic");
$tituloprov = "basic";
define("tituloprov", "Título para la página basic");
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
?>
<div class="css3">
<h2>Hello World!</h2>
<p>Vale, la acabo de liar con los branches</p>
</div>
<div class="css3">
<p id="eltiempo">
<button type="button"
onclick="document.getElementById('eltiempo').innerHTML = Date()">
¿A qué día estamos?</button>
</div>
<p>Z5sa1dPnQ%@XDek7Gk</p>
<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';?>
