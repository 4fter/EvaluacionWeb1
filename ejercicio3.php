<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<form action="ejercicio3.php" method="POST">
    <input type="number" class="form-control" placeholder="Ingrese el numero de horas trabajadas" name="horas">
    <button type="submit" name="botoncalcular">Calcular</button>
</form>
<?php 
$horas=$_POST["horas"];
$salario=0;
$salario2=0;
if(isset($_POST["botoncalcular"])){
    if($horas<41){
        $salario=$horas*20000;
        echo("el salario es: ".$salario);
    }
    if($horas>40){
        for($i=0;$i<$horas;$i++){
            if($i<41){
                $salario=$salario+20000;
            }else{
                $salario2=$salario2+25000;
            }
        }
        $total=$salario+$salario2;
        echo("el salario es: ".$total);
    }
}
?>

</html>