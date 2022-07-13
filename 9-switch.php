<?php
    if ($_POST) {
        $btnvalor = $_POST['btn_valor'];

        switch ($btnvalor) {
            case '1':
                    echo "Presionó el botón 1";
                break;

            case '2':
                    echo "Presionó el botón 2";
                break;

            case '3':
                    echo "Presionó el botón 3";
                break;
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="9-switch.php" method="post">
        <input type="submit" name="btn_valor" value="1">
        <br>
        <input type="submit" name="btn_valor" value="2">
        <br>
        <input type="submit" name="btn_valor" value="3">
        <br>
    </form>


</body>
</html>