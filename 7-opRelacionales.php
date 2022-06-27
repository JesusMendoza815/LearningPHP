<?php
    if ($_POST) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        if ($valorA > $valorB) {
            echo $valorA.' Mayor que '.$valorB;
        } else if ($valorA < $valorB) {
            echo $valorB.' Mayor que '.$valorA;
        } else {
            echo $valorB.' Igual que '.$valorA;
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
    <form action="7-opRelacionales.php" method="post">
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