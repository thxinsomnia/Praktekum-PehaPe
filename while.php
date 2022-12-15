<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Whileeee</h2>

    <!-- Masukkan PH{ disini} -->

    <?php
    $hari=array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
    $i=0;
    while($i<count($hari))
    {
        echo ("Hari Ke ".($i+1)." Adalah ".$hari[$i]."<br>");
        $i++;
    }
    ?>
</body>
</html>