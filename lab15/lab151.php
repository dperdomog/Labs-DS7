<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo DataTable JQuery</title>
    <link rel="stylesheet" type="text/css" href="librerias/jquery.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="librerias/jquery-3.1.1.js"></script>
    <script type="text/javascript" language="javascript" src="librerias/jquery.dataTables.min.js"></script>
</head>
<body>
<script type="text/javascript">
$(document).ready(function() {
    $('#grid').DataTable({
        "lengthMenu": [5, 10, 20, 50],
        "order": [[0, "asc"]],
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No existen resultados en su búsqueda",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Buscado entre _MAX_ registros en total)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });

    $("*").css("font-family", "arial").css("font-size", "12px");
});
</script>
<h1>Consulta de noticias</h1>
<?php
require_once('class/noticias.php');
$obj_noticia = new noticia();
$noticias = $obj_noticia->consultar_noticias();

$nfilas = count($noticias);

if ($nfilas > 0) {
    print "<table id='grid' class='display' cellspacing='0'>";
    print "<thead>";
    print "<tr>";
    print "<th>Titulo</th>";
    print "<th>Texto</th>";
    print "<th>Categoria</th>";
    print "<th>Fecha</th>";
    print "<th>Imagen</th>";
    print "</tr>";
    print "</thead>";
    print "<tbody>";

    foreach ($noticias as $resultado) {
        print "<tr>";
        print "<td>" . $resultado['titulo'] . "</td>";
        print "<td>" . $resultado['texto'] . "</td>";
        print "<td>" . $resultado['categoria'] . "</td>";
        print "<td>" . date("j/n/Y", strtotime($resultado['fecha'])) . "</td>";

        if ($resultado['imagen'] != null) {
            print "<td><a target='_blank' href='img/" . $resultado['imagen'] . "'><img border='0' src='img/iconotexto.gif'></a></td>";
        } else {
            print "<td>&nbsp;</td>";
        }

        print "</tr>";
    }

    print "</tbody>";
    print "</table>";
} else {
    print "No hay noticias disponibles";
}
?>
</body>
</html>
