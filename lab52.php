<?php
if (is_uploaded_file($_FILES ['nombre_archivo_cliente']['tmp_name']))
{
    $nombreDirectorio = "archivos/";
    $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
    $nombreCompleto = $nombreDirectorio . $nombrearchivo;
    $extension=pathinfo($nombrearchivo,PATHINFO_EXTENSION);
    $peso=$_FILES['nombre_archivo_cliente']['size'];
    if ($peso<=1048576)
    {
       if($extension == "jpg" ||$extension=="jpeg"||$extension=="gif"||$extension=="png")
       {
            if (is_file($nombreCompleto))
            {
                    $idUnico = time();
                    $nombrearchivo = $idUnico . "-" . $nombrearchivo;
                    echo "Archivo repetido, se cambiara el nombre a $nombrearchivo <br><br>";
            }       
                    move_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'],
                    $nombreDirectorio . $nombrearchivo);
                    echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
                    echo $extension;
       }
       else
       echo "formato invalido de archivo <br>";
       
    }
    else 
    echo "El archiso pesa mas de 1MB";
}
else
echo "No se ha podido subir el archivo <br>";
?>