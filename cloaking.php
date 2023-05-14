<!DOCTYPE html>
<html lang="es">
<body>
<p>
<?php
 // Forma de poner un contenido si user agent
 if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "googlebot"))
 {
   echo '<p>Contenido que se muestra sólo a Googlebot:<span style="color:green"> ESTE CONTENIDO SOLO SE MUESTRA A GOOGLEBOT</p></span>';
}
elseif(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "bingbot"))
{
  echo '<p>Contenido que se muestra sólo a BINGBOT:<span style="color:green"> ESTE CONTENIDO SOLO SE MUESTRA A BINGBOT</p></span>';
}
else{echo '<p>Contenido que se muestre sólo a Googlebot/bingbot: <span style="color:red"> NO LO DETECTAS</span></p>';}
  ?>
</p>
</body>