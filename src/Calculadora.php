<?php

namespace App; //Luego lo pondremos en el composer.json, apartado "autoload"

class Calculadora{

  public function suma($a, $b){

    return $a + $b;

  }


  public function resta ($a, $b){

    return $a - $b;

  }


  public function multiplicar($a, $b){

    return $a * $b;

  }

  public function dividir($a, $b){

    return $a / $b;

  }


}

?>