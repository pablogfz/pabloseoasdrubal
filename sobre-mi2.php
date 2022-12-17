<html>
<?php 
define ("pagina", "sobre-mi2");
/* $variableconstante1 =ccc;*/
include $_SERVER['DOCUMENT_ROOT'].'/assets/header.php';?>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Esta es la etiqueta Title de Sobre mí 2</title>
    <style>
        .interdiv div {
            filter: blur(3px);
        }    
        div .chupidiv {
    text-align: right;
}    
.herencias >p {
    text-align: center;
}
.tocoto .tecete {
        background: blueviolet;
    }
    </style>
</head>
<body>
    <h1>Esta es la página sobre-mi2 que no se por qué  no da aparecido, narices</h1>
    <section id="Prueba-de-desplegable">
    <details>
        <summary>Prueba de desplegable</summary>
Cuando despliegas esto aparece este texto que estás leyendo</details>
<details>
    <summary>Prueba de desplegable 2</summary>
Cuando despliegas esto aparece este texto que estás leyendo, pero es la segunda parte</details>
<div>
<code>
    &lt;h3&gt;Random Content Group 1 (4 pieces of content total):&lt;/h3&gt;

    &lt;div class=&quot;randomcontent group1&quot;&gt;	
    
    &lt;p style="border:1px dashed gray; background-color:lightyellow; padding: 10px">Group 1 Content 1&lt;/p&gt;	
     
</code>
</div>
</section>
<section>
    <div class="interdiv">esto es un div, pero <div>con otro div dentro, para hacer pruebas</div>para ver que pasa con esto del css</div>
</section>
<section>
    <div>este es el segundo efecto <div class="chupidiv">el de hacer un estilo de un div que está fuera de un div</div>o algo así le entendí a Carlos</div>
</section>
<div class="herencias">
    <div class="parrafos">
        <p>parrafo 1</p>
    </div>
    <p>parrafo 2
    </p>
</div>
<section>
    <div class="tocoto">
        <p class="tacata">parrafo 3</p>
        <p class="tecete">parrafo 4</p>
    </div>
</section>
<?php include $_SERVER['DOCUMENT_ROOT'].'/assets/footer.php';?>
</body>
</html>
