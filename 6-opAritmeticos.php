<?php
    if ($_POST) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        $suma = $valorA + $valorB;
        $resta = $valorA - $valorB;
        $division = $valorA / $valorB;
        $multiply = $valorA * $valorB;
        $residuo = $valorA % $valorB;
        echo '<br>'.'Suma: '.$suma;
        echo '<br>'.'Resta: '.$resta;
        echo '<br>'.'Division: '.$division;
        echo '<br>'.'Multiply: '.$multiply;
        echo '<br>'.'Residuo: '.$residuo;
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
    <form action="6-opAritmeticos.php" method="post">
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