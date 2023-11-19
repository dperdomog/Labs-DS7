<?php
  session_star ();
?>
<html XMLNS="http://www.w3.org/1999/xhtml" xml:lang="es" LANG="es">
<head>
    <title>Laboratorio 12</title>
    <link REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</head>
<h1>Manejo de sesiones </h1>
<h2>Paso 1: se crea la variable de sesion y se almacena</h2>
<?php
    $var ="Ejemplo Sessiones";
    $_SESSION['var'] = $var;
    print ("<p>Valor de la variable de sesion: $var</P>\n");
?>
<A HREF="lab122.php">Paso 2 </A>
</body>
</html>