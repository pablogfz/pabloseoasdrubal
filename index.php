<?php 
$variableconstante1 = "La constancia es la clave, enjabonar, enjuagar y repetir, siempre repetir";
define ("variableconstante1", "variableconstante modificada con define");
define ("pagina", "index");
include_once $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';  error_reporting (0);?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';?>
<?php echo $_SERVER['DOCUMENT_ROOT']; ?>
        <section id="section1">
            <h1 class="h1prueba1" style="color:blueviolet">Hola, soy Pablo <?php echo date("l/z"); ?></h1>
            <h1> <?php echo variableconstante1; ?></h1>
            <div title="Este texto se lee cuando haces hover en este elemento">esto está en un div</div>
            <p>pero esto <b style="color:brown">no</b>, <a href=index.php>no</a>, no</p>
            <pablo>etiqueta <p>Pablo</p> de <br>prueba</pablo><br>
            <div class="intro">este div tiene una etiqueta <span>en su interior</span></div>
            <div class="intro">Este es el div que <span>lleva un span dentro y, además, un <p>pe</p></span></div>
            <div class="intro">y ahora un div con otro <div>dib en su</div> interior</div>
            <div class="intro"><img src="/imagenes/spanvsdiv.jpg" width="600" height="300" alt="este es el alt de la primera imagen subida para este ejercicio"></div>
            <span title="probando con titles para los span">y ahora vamos a probar a <div>poner un div dentro de un span</div></span>
    </section>
    <?php echo 'HOLA CON PHP';
    echo variableconstante1;?>
    <div> <?php ctas();?></div>
    <?php echo "</p>HOLA CON PHP Y COMILLAS CON P";?>
    <section>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap</p>
        <p>into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem</p>
        <p>Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </section>
    <section id="imagenes">
        <picture>
            <source type="image/gif" srcset="/imagenes/htmlcheatsheet.gif">
        <img src="/imagenes/htmlcheatsheet.png" loading="lazy" width="600" height="800" title="título de chuleta html" alt="imagen muy grande sobre etiquetas html">
    </picture>
    </section>
    <?php $variable1 = "</p>Variable 100";
    echo $variable1;
    ?>
    <p>
        <?php $variable1 = "Variable 1000 con php dentro de html";
    echo $variable1;
    ?> </p>
     <?php $variable1 = "</p>Variable 100";
    /*echo $variable1 da error;
    */?>
    <?php $variable1 = "</p>Variable 100";
    echo "$variable1 no da error";
    ?>
        <?php $variable1 = "</p>Variable 100";
    echo '$variable1 no da error con comilla simple';
    ?>
        <?php $variable1 = "</p>Variable 100";
    echo "$variable1". " con punto no da error" . " que punto significa sumar" . "$variable1";
    ?>
        <?php $variable1 = "</p>Variable 100";
    echo $variable3 ?>
<?php $variable1 = "Variable 100";
$variable2 = "Variable 200";
$variable4 = "Variable 400";
    if ($variable2 != $variable4){echo "$variable1" . "probando if php va de invocar cosas";}?>
    <p>
<?php $variable5 = "Variable 500";
$variable6 = "Variable 200";
    if ($variable5 == $variable6){echo "$variable1" . "probando elseif con señores de Cartagena";}
    elseif($variable5 == 'Variable 500'){
        echo 'Haciendo cosas con elseif';    }
    else {
        echo 'No se cumple la condición';
    }
    ?>
    </p>
    <p>
    <?php $variable8 = "Variable 500";
$variable9 = "Variable 500";
    if ($variable8 == $variable9){echo "$variable1" . "probando elseif pero sin saber todavía por qué comilla simple y no comilla doble";}
    elseif($variable5 == 'Variable 500'){
        echo 'Haciendo cosas con elseif';    }
    else {
        echo 'No se cumple la condición';
    }
    ?>
    </p>
    <div class="divcentro">esto es un div que quiero centrar</div>        
<div class="php">
    <form action="accion.php" method="post">
 <p>Su nombre: <input type="text" name="nombre" /></p>
 <p>Su edad: <input type="text" name="edad" /></p>
 <p><input type="submit" /></p>
 <!-- ¿Contaría como código cualquiera de php? Supongo que no, así que probaré con otra cosa-->
</form>
</div>
<div style="background:red; color:white";>
<?php
function cuadrado($núm)
{
return $núm * $núm;
}
echo cuadrado(8); echo " aquí aparece el cuadrado del número que ponga en el código. La utilidad no se la veo, pero entiendo que debe estar bien";
?>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/tablasql.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';?>
    </html>

