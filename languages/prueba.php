<?php
$current_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$es_url = 'http://pabloseoasdrubal.test/idioma1.php';
$en_url = 'http://pabloseoasdrubal.test/test/en.php';

if ($lang == 'es'){
$title = 'Hola';
$h1 = 'Ejemplos de h1';
$texto1 ='Este es el texto1 en español';
}
else{
    $title = 'Hi';
    $h1 = 'h1 examples';
    $texto1 ='This is the texto1 in Spanish';
}
?>
<html lang="<?php echo $lang;?>">
<head>
<Title><?php echo $title;?></Title>
<link rel ="canonical" href="<?php echo $current_url;?>">
<?php
/*
<link rel="alternate" hreflang="x-default" href="<?php echo $en_url;?>">
<link rel="alternate" hreflang="en" href="<?php echo $en_url;?>">
<link rel="alternate" hreflang="es" href="<?php echo $es_url;?>">
*/
?>
</head>
<body>
<header>
<nav></nav>
</header>
<section>
<h1><?php echo $h1;?></h1>
<div> <?php echo $texto1?></div>
</section>
</body> 
</head>
</html>