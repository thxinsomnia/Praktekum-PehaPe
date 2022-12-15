<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>FOREACH</h2>
    <p>nama bulan</p>

    <!-- masukkan php disni -->

    <?php
    $i=0;
    $bulan=array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    foreach($bulan AS $bln)
    {
        echo (($i+1)."$bln <br>");
        $i++;
    }
    ?>
</body>
</html>