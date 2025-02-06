<?php

require_once ("src/Calculadora.php");

use App\Calculadora;


  if ($_SERVER["REQUEST_METHOD"] == "POST"){

    //Declaramos las variables con el valor introducido, por defecto se pone un 0
    $number1 = isset($_POST["number1"]) ? floatval($_POST['number1']) : 0;
    $number2 = isset($_POST['number2']) ? floatval($_POST['number2']) : 0;

    $calculadora = new Calculadora();

    if(isset($_POST["sumar"])){
      $resultado = $calculadora->suma($number1, $number2);
    }else if(isset($_POST["restar"])){

      $resultado = $calculadora->resta($number1, $number2);

    }else if(isset($_POST["multi"])){

      $resultado = $calculadora->multiplicar($number1, $number2);

    }else if(isset($_POST["dividir"])){

      $resultado = $calculadora->dividir($number1, $number2);

    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    h1{
      text-align: center;
    }
  </style>
  <title>Document</title>
</head>
<body>
  <h1>Calculadora en PHP</h1>
  <form  method="post">
    <label for="number1">Numero 1:</label>
    <input type="text" name="number1" placeholder="Ingresa el primer número a calcular" required>
    <br>
    <br>
    <label for="number2">Numero 2:</label>
    <input type="text" name="number2" placeholder="Ingresa el segunfo número" required>
    <br><br>
    <div>
      <input type="submit" value="Sumar" name="sumar">
      <input type="submit" value="Resta" name="restar">
      <input type="submit" value="Multiplicar" name="multi">
      <input type="submit" value="Dividir" name="dividir">
  </form>
  
    <h2>Resultado: <?php echo $resultado; ?></h2>

</body>
</html>