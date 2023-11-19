<?php
  if(isset($_COOKIE['contador']))
  {
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60);
    $mensaje = 'Gracias por visitarnos. Número de visitas: ' . $_COOKIE['contador'];
  }
  else
  {
    //Caduca en un año
    setcookie('contador',1, time() + 365 * 24 * 60 * 60);
    $mensaje = 'Bienvenido a nuestro sitio web';
  }

?>
<HTML XMLS="http://www.w3.org/1999/xhtml" xml:lang="es" LANG="es">
<HEAD>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
<H1>Contador de visitas con cookies</H1></p>
<h3><?php echo $mensaje; ?></h3>
</BODY>

</HTML>