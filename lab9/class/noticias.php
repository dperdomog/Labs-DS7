<?php

require_once('modelo.php');

class noticias extends modeloCredencialesBD{
protected $titulo;
protected $texto;
protected $categoria;
protected $fecha;
protected $imagen;

public function__construct(){
    parent::__construct();

public function consultar_noticias(){

$instruccion = "CALL ap_listar_noticias()";

$consulta=$this->_db->query($instruccion);
$resultado=$consulta->fecha_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
    }
    else{
        return $resultado;
        $resultado->close();
        $this->_db->close();
    }
}
}

public function consultar_noticias_filtro($campo, $valor){
    $instruccion = "CALL sp_listar_noticias_filtro ('".$campo. "'.'".$valor."')";

    $consulta=$this->_db->query($instruccion);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if($resultado){
        return $resultado;
        $resultado->close();
        $resultado->close();
        $this->_db->close();
    }
}
}
?>