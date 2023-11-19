<?php
  $ventas = $_POST['ventas'];

  require 'class_lib.php';

  $ventas = new Ventas($ventas);

  $imagen = $ventas->selecionarImagenes();

  //Mostar las imagenes
  echo "<h2>Imagenes Dinamicas<h2>";
  echo "<img src=''>;
?>