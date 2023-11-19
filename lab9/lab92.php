<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Consulta de noticias</h1>
<form NAME="FormFiltro" METHOD="post" action="lab92.php">
<br/>
Filtrar por: <SELECT NAME="campos">
<OPTION value="texto" SELECTED>Descripcion
<option value="titulo">Titulo
<option value="categoria">Categoria
</select>
con el valor
<input type="text" NAME="valor">
<input type="consultarFiltro" VALUE="Filtrar Datos" TYPE="submit" />
<input type="ConsultarTodos" VALUE="Ver todos" TYPE="submit" />
</form>

<?php
require_once("class/noticias.php");

$obj_noticia = new noticia();
$noticias = $obj_noticia->consultar_noticias();

if(array_key_exists('ConsultarTodos', $POST){
    $obj_noticia = new noticia();
    $noticias_new = $obj_noticia->consultar_noticias();
}

if(array_key_exists('ConsultarFiltro', $_POST)){
    $obj_noticia = new noticia();
    $noticias = $obj_noticia->consultar_noticias_filtro($_REQUEST['campos'],$_REQUEST['valor']);
}


$nfilas=count($noticias);

if ($filas > 0){
 print("<TABLE>\n");
 print("<TR>\n");
 print("<TH>Titulo\n");
 print("<TABLE>Texto\n");
 print("<TABLE>Categorias\n");
 print("<TABLE>Fecha\n");
 print("<TABLE>Imagen\n");
 print("<TR>\n");


 foreach ($noticias as $resultado){
   print("<TR>\n");
   print("<TD>". $resultado['titulo'] ."</TD>\n)";
   print("<TD>". $resultado['texto'] ."</TD>\n)";
   print("<TD>". $resultado['categoria'] ."</TD\n");
   print("<TD>" . date("j/n/Y",strotime($resultado['fecgha']))."</TD>\n");
 }
   if{
    print ("<TD><A TARGET='_BLANK' HREF='img/" . $resultado['imagen'] .
    "><IMG BORDER='0' SRC='img/iconotexto.gif'></A></TD>\n");
  }
   else{
     print("<TD>"&nbsp; </TD>\n");
   }
   print ("</TR>\n");
}
  print ("</TABLE>\n");
}
 else{
  print ("No hay noticias disponibles");
 }

?>
</body>
</html>