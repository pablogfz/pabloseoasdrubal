<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';?>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';
/* include_once $_SERVER['DOCUMENT_ROOT'].'/assets/header.php' */?>
<?php echo $_SERVER['DOCUMENT_ROOT']; ?>
        <section id="section1">
            <h1 class="h1prueba1" style="color:blueviolet">Hola, soy Pablo <?php echo date("l/z"); ?></h1>
            <div title="Este texto se lee cuando haces hover en este elemento">esto está en un div</div>
            <p>pero esto <b style="color:brown">no</b>, <a href=index.php>no</a>, no</p>
            <pablo>etiqueta <p>Pablo</p> de <br>prueba</pablo><br>
            <div class="intro">este div tiene una etiqueta <span>en su interior</span></div>
            <div class="intro">Este es el div que <span>lleva un span dentro y, además, un <p>pe</p></span></div>
            <div class="intro">y ahora un div con otro <div>dib en su</div> interior</div>
            <div class="intro"><img src="/imagenes/spanvsdiv.jpg" width="600" height="300" alt="este es el alt de la primera imagen subida para este ejercicio"></div>
            <span title="probando con titles para los span">y ahora vamos a probar a <div>poner un div dentro de un span</div></span>
    </section>
    <?php echo 'HOLA CON PHP';?>
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
    echo $variable2 ?>
    <div class="divcentro">esto es un div que quiero centrar</div>    
    <?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';?>
    </html>

