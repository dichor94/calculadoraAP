<?php

use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase {

  public function testSuma(){
    $calc = new Calculadora();
    $this -> assertEquals(5, $calc->suma(3,2));
  }


  public function testResta(){

    $calc = new Calculadora();
    $resultadoResta = $calc -> resta(10,5);
    $this -> assertEquals(5, $resultadoResta);
    $this -> assertGreaterThan(3, $resultadoResta);
    $this -> assertLessThan(8, $resultadoResta);

  }

  public function testMultiplicar(){

    $calc = new Calculadora();
    $resultadoMulti = $calc -> multiplicar(10,5);
    $this -> assertEquals(50, $resultadoMulti);
    $this -> assertIsInt($resultadoMulti);
    $this -> assertSame($resultadoMulti, 50);

  }

  public function testDividir(){
    $calc = new Calculadora();
    $resultadoDiv = $calc -> dividir(21,2);
    $this -> assertEquals(10.5, $resultadoDiv);
    $this -> assertIsFloat($resultadoDiv);
    $this -> assertNotNull($resultadoDiv);
  }
}













?>