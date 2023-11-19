<html LANG="es">
<HEAD>
    <TITLE>Laboratorio 13 </TITLE>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css"
</HEAD>
<BODY>
 <H1>Recuperar valor de una Cookie</H1>
 <?php

 if
 (isset ($_COOKIE["user"]))
 echo "<h2>Bienvenido ".$_COOKIE["user"]."!</h2><br>";
 else
 echo
 "<h2>Bienvenido invitado!</H2><br/>";
 ?>
 <A HREF="lab131.php">...Regresar</A>&nbsp;
 <A HREF="lab134.php">Continuar...</A

</BODY>

</html>