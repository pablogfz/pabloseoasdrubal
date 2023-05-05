<div>
<a href="index">Relativa 1</a>
<p>Enlace sin barrita</p>
</div>
<div>
<a href="/index">Relativa 2</a>
<p>Enlace con barrita</p>
</div>
<div>
<a href="../imagenes/srcangrejo.jpg">Relativa 3</a>
<p>La página se encuentra en la carpeta anterior a la ruta que especificamos, de ahí los .., que, en este caso, es el root</p>
</div>
<div>
<a href="/imagenes/srcangrejo.jpg">Relativa 4</a>
<p>La página se encuentra en la carpeta categoría que desciende directamente de la carpeta raiz, ROOT.</p>
</div>
<div>
<a href="http://pabloseoasdrubal.test/imagenes/srcangrejo.jpg">Absoluto</a>
<p>A tope</p>
</div>
<!--<base href="http://imagenes">Relativa 5</a>
<p>Cambiando la base de los enlaces de esta URL Coñe</p>
</div>-->
<!-- 
<a href="atributos" download="nombre del enlace. En el caso del atributo download, deberá estar dentro del protocolo https para que pueda funcionar"</a>
<a href="atributos" rel="dofollow (no necesario, es la opción por defecto) o nofollow, al que a veces Google tampoco hace mucho caso. Si se añade otro atributo, por cierto, se puede hacer seguido de una coma, como 'noreferer', o 'noopener'"</a>
-->
<div>
<p>
noreferrer: Este atributo indica al navegador que no envíe el valor del Referer HTTP header cuando el usuario hace clic en el enlace. 
El Referer normalmente indica la página desde la cual se hizo clic en el enlace y puede ser utilizado por el sitio web de destino para rastrear el tráfico de referencia. 
Al agregar noreferrer, se impide que la página de destino pueda saber desde qué página se hizo clic en el enlace. Esto puede ser útil para proteger la privacidad del usuario y prevenir el seguimiento.

noopener: Este atributo indica al navegador que no permita que la página de destino acceda a la ventana o pestaña actual (el "opener") mediante JavaScript. 
Esto ayuda a prevenir ataques de seguridad conocidos como "reverse tabnabbing", en los cuales la página de destino puede cambiar la página original por medio del objeto window.opener, 
en un intento de engañar al usuario para que revele información o realice acciones no deseadas. Al agregar noopener, se asegura que la página de destino no tenga acceso al contexto de la página original.</p>
</div>
<ul>
Tipos de anchor text:
<li>Exact-match
<li>Partial-match
<li>Branded
<li>Naked
<li>Generic (evitar)
<li>Images (alt)
</ul>
<!--
<a href="atributos" rel="ugc, o contenido generado por el usuario"</a>
<a href="atributos" rel="sponsored, para contenido patrocinado"</a>-->

<p>En este texto voy a <span id="ofc" style="color:blue; cursor:pointer">ofuscar</span> un enlace</p>
<script>
const element = document.getElementById("ofc");
element.addEventListener("click", myFunction);
function myFunction() {
location.href='https://www.eltiempo.es/presion'
}
</script>