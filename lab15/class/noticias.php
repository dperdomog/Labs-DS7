<?php
require_once ('modelo.php');

class noticia extends modeloCredencialesDB{

    protected $titulo;
    protected $texto;
    protected $categoria;
    protected $fecha;
    protected $imagen;

public function __construct(){
    parent::__construct();
}

public function consultar_noticias(){
    $instruction = "CALL sp_listar_noticias()";

    $consulta=$this->_db->query($instruction);
    $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
       
    }else{
        
        return $resultado;
    }
}

public function consultar_noticias_filtro($campo, $valor){
    $valor = $this->_db->real_escape_string($valor); // Sanitizar el valor para evitar inyección de SQL
    $instruction = "CALL sp_listar_noticias_filtro('$campo', '$valor')";

    $consulta = $this->_db->query($instruction);
    $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

    if(!$resultado){
        echo "Fallo al consultar las noticias";
    }

    return $resultado;
}

}
?>