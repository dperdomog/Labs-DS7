<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../configuracion/conexion.php';
include_once '../objetos/producto.php';

$conex = new Conexion();
$db = $conex->obtenerConexion();

$producto = new Producto($db);

$stmt = $producto->read();
$num = $stmt->rowCount();

if($num>0){
 $products_arr=array();
 $products_arr["records"]=array();

 while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  extract($row);
  $product_item=array(
   "id" => $id,
   "nombre" => $nombre,
   "descripcion" => html_entity_decode($descripcion),
   "precio" => $precio,
   "categoria_id" => $categoria_id,
   "categoria_desc" => $categoria_desc
  );
  array_push($products_arr["records"], $product_item);
 }
 http_response_code(200);
 echo json_encode($products_arr);
}
else{
 http_response_code(404);
 echo json_encode(array("message" => "No se encontraron productos."));
}
?>