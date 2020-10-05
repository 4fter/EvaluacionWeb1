<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
</head>
<form action="ejercicio2.php" method="POST">
    <input type="number" class="form-control" placeholder="Ingrese su peso" name="peso" step="0.001">  
    <input type="number" class="form-control" placeholder="Ingrese su altura" name="altura" step="0.001">
    <button type="submit" name="botoncalcular">Calcular</button>
</form>
<?php
$altura=$_POST["altura"];
$peso=$_POST["peso"];
    if(isset($_POST["botoncalcular"])){
        $IMC=$peso/($altura*$altura);
    }
    if($IMC<18.5){
        echo("peso insuficiente");
    }else if($IMC>18.4 && $IMC<25){
        echo("Normopeso");
    }else if($IMC>24.9 && $IMC<27){
        echo("Sobrepeso grado 1");
    }else if($IMC>26.9 && $IMC<30){
        echo("Sobrepeso grado 2(preobesidad)");
    }else if($IMC>29.9 && $IMC<35){
        echo("obesidad tipo 1");
    }else if($IMC>34.9 && $IMC<40){
        echo("Obesidad tipo 2");
    }else if($IMC>39.9 && $IMC<50){
        echo("Obesidad tipo 3(morbida)");
    }else{
        echo("Obesidad tipo 4(extrema)");
    }
?>
</html>