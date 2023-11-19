<?php
  session_star ();
?>
<html LANG="es">
<head>
    <title>Laboratorio 12</title>
    <link REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</head>
<h1>Manejo de sesiones </h1>
<h2>Paso 2: se accede a la variable de sesion almacenada y se destruye</h2>
<?php
    if(isset ($_SESSION['var'])){
        $var = $_SESSION['var'];
        print ("<P>Valor de la variabel de sesion: $var</P>\n");
        unset ($_SESSION['var']);
        print ("<A HREF='lab123.php'>Paso 3</A>");
    }
?>
<A HREF="lab122.php">Paso 2 </A>
</body>
</html>