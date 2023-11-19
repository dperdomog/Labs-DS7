<?php
if (array_key_exist('enviar', $_POST)){
$expire=time()+60*5;
setcookie("user", $_REQUEST['visitante'] ,$expire);
header("Refresh:0");
}
?>
<html LANG="es">
<head>
    <title>Laboratorio 13</title>
    <link REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</head>
<body>
<h1>Creacion de cookies</h1>
<h2>La coockie "User" tendra solo 5 minutos de duracion</h2>
<?php
if (isset ($_COOKIE["user"])){
print("<BR/>Hola <B>".$_COOKIE["user"]."</B> gracoas por visitar nuestro sitio web<BR/>");
}else{
?>
<form NAME="formcookie" METHOD="post" action="lab142.php">
<input type="text" NAME="visitante">
<input name="enviar" VALUE="Gracias por intentificate" type="submit" /><BR/>
<?php
}
?>
<br/><A HREF="lab133.php" >Continuar...</A>
</body>

</html>