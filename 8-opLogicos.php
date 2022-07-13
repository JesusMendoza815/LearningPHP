<?php
    if ($_POST) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];
/*
&&
||
*/
        if (($valorA == 10) && ($valorB == 10)) {
            echo 'Correcto, ambos valen 10';
        } else {
            echo 'Ambos valores deben valer 10';
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <form action="8-opLogicos.php" method="post">
        Valor A:
        <input type="number" name="valorA" id="">
        <br>
        Valor B:
        <input type="number" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>