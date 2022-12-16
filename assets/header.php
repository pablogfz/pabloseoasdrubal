<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta charset="UTF-8">
          <link rel="stylesheet" href="https://<?php echo $_SERVER['HTTP_HOST'];?>/css/estilo.css">
          <!-- <link rel="stylesheet" href="css/import.css"-->
    <title>Esta es la etiqueta Title</title>    
    <?php if (empty ($variableconstante1))
    {echo "H1 trucho porque la variableconstante1 no está especificada en esta página";} ?>
    <!-- Problema comentado en Primerito-->
    <style>    
       .intro {
    background: blue;
    color: white;
    padding: 8px;
    margin-top: 8px;
    margin-bottom: 8px;}
    .intro {
    background: brown;
    color: darkblue;
}

    </style>
</head>
    <body>
        <!-- Esto de aquí es un comentario-->
    <header>
        <nav class="pruebarroba">
            <ul>
            <li><a href="/index.php">Inicio</a></li>    
            <li><a href="/primerito.php">Primerito</a></li>
                <li><a href="/sobre-mi2.php">Sobre mi</a></li>
                <li><a href="/paginanueva.php">Página hueva</a></li>
                <li><a href="/contacto.php">contacto</a></li>
                <li><a href="/carpeta/archivo-carpeta.php">Archivo dentro de carpeta</a></li>
                <li><a href="https://es.wikipedia.org/wiki/Matar_un_ruise%C3%B1or" target="_blank">Enlace a wikipedia</a>
                <li><a href="/css2.php">CSS2</a></li>
            </ul>
        </nav>
    </header>