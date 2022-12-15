<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tes Switch</h2>

    <!-- Masukkan PHP Disiini -->

    <?php
    $angka_mantan=3;
    echo("Mantan lu $angka_mantan<br>");
    switch($angka_mantan)
    {
        case 0: echo("Mantan Mutu E"); break;
        case 1: echo("Huruf Mutu D"); break;
        case 2: echo("Huruf Mutu C"); break;
        case 3: echo("Huruf Mutu B"); break;
        case 4: echo("Huruf Mutu A"); break;
        default: echo("Huruf Mutu Tidak Dikenali");
    }
    ?>
</body>
</html>