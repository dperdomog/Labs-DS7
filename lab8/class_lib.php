<?php
  class Venta{
    var $ventas;

    function __construct ($venta){
      $this->venta = $venta;
    }

    public function imagenes(){
        $imagen = "";

        if($this->ventas >=80){
            $imagen = "semaforo/good.png";
        } else if ($this->ventas >= 50 && $this->venta <80)
            $imagen = "semaforo/regular.png";
        }else {
            $imagen = "semaforo/bad.png";
        }
        return $imagen;
     }
  }

  Class Factorial{
    var $nfactorial;

    function _construct($nfact){
        $this->nfactorial = $nfact;
    }

    public function nfactorial(){
        var $nfactorial = $nfact;

        for($n = $this->nfactorial; $n >0; $n--){
            $factorial *=$n;
        }

        return $factorial;
    }

    class Arreglo{
        var $miArreglo = array();

        function __construct(){
            for ($i = 0; $i < 20; $i++){
                $this->miArreglo[] = $i;
            }
        }

        public function encontrarElementoMayor(){
            //Encontrar el elemento mayor
            $elementoMayor = max($this->miArreglo);
            // Encontrar la posicion del elemento mayor

            $posicion = array_search($elementMayor, $this->miArreglo);

            // Devolver el elemento mayor y su posicion
            return array ('elementMayor' => $elementoMayor, $this->miArreglo);

        }
    }

?>