<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<form action="index.php" method="POST">
    <input type="number" class="form-control" placeholder="Ingrese el numero uno" name="numero1">  
    <input type="number" class="form-control" placeholder="Ingrese el numero dos" name="numero2">
    <button type="submit" name="botonsuma">Sumar</button>
    <button type="submit" name="botonresta">Restar</button>
    <button type="submit" name="botonmult">multiplicar</button>
    <button type="submit" name="botondividir">dividir</button>
</form>
<?php
 $num1=$_POST["numero1"];
 $num2=$_POST["numero2"];
 if(isset($_POST["botonsuma"])){
        $resultado=$num1+$num2;
        echo("la suma es:".$resultado);
    }   
    if(isset($_POST["botonresta"])){
        $resultado=$num1-$num2;
        echo("la resta es:".$resultado);
    }  
    if(isset($_POST["botonmult"])){
        $resultado=$num1*$num2;
        echo("la multiplicacion es:".$resultado);
    }  
    if(isset($_POST["botondividir"])){
        $resultado=$num1/$num2;
        echo("la division es:".$resultado);
    }        
?>
</html>
