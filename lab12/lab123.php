<?php
    session_start();
?>
<HTML LANG="es">
<HEAD>
    <title>Laboratorio 12</title>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</head>
<BODY>
    <H1>Manejo de sessiones</H1>
    <h2>Paso 3: la variable ya ha sido destruida y su valor se ha perdido</h2>
<?php
   if(isset($_SESSION['var'])){
      $var = $_SESSION['var'];
    }else{
        $var = "";
    }
    print ("<p>Valor de la variable de sesion: $var</P>\n");
    session_destroy();
?>
<A HREF="lab121.php">Volver al paso 1 </A>
</BODY>
</HTML>

