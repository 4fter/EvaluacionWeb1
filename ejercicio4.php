<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio4</title>
</head>
<form action="ejercicio4.php" method="POST">
    <input type="number" class="form-control" placeholder="Ingrese el numero de pares" name="pares">  
    <input type="number" class="form-control" placeholder="Ingrese el valor de cada par de zapatos" name="valor">
    <button type="submit" name="botoncalcular">calcular</button>

<?php
    $pares=$_POST["pares"];
    $valor=$_POST["valor"];
    $total=$valor*$pares;
        if(isset($_POST["botoncalcular"])){
            if($pares==3){
                $total=$total*0.90;
            }else if($pares<3){
                $total=$total+0;
            }else if($pares>3 && $pares<9){
                $total=$total*0.80;
            }else{
                $total=$total*0.50;
            }
            echo("el total de la compra es: ".$total);
        }

?>
</html>