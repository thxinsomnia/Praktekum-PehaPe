<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengguannaaa modelularisasi</title>
</head>
<body>
    <h2>penggunaan require_once</h2>
    <pre>
        <?php
    require_once("function.php");
    echo("luas segi empat dengan p = 2 dan i = 4 adalah ".luas(2, 4)."<br>");
    require_once("function.php");
    echo("luas segi empat dengan p = 5 dan i = 4 adalah ".luas(5, 4)."<br>");
    ?>
    </pre>
    
</body>
</html>