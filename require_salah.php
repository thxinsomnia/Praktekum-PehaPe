<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan modulalrisasi</title>
</head>
<body>
    <h1>Penggunaan require</h1>
    <pre>
        <?php
        require("function.php");
        echo("luas segi empat dengan p = 2 dani = 4 adalah ".luas(2, 4)."<br> </pre>");
        require("function.php");
        echo("luas segi empat dengan p = 5 dan i = 4 adalah ".luas(5, 4));
        ?>
    </pre>
</body>
</html>