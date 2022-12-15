<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ELSE IF TRY</h2>

    <!-- Masukkan PHP Disini -->

    <?php
    $nilai=10;
    echo ("Nilai $nilai ");
    if ($nilai>=90)
    {
        echo ("Grade A");
    }
    elseif (($nilai>75)and($nilai<85))
    {
        echo ("Grade B");
    }
    elseif (($nilai>65)and($nilai<75))
    {
        echo ("Grade B");
    }
    elseif (($nilai>55)and($nilai<65))
    {
        echo ("Grade D");
    }
    elseif ($nilai<50)
    {
        echo ("Grade E"."<br>");
    }

    if ($Grade="E")
    {echo ("Lu Ga LULUS BGSD")."<br>";}

    ?>
</body>
</html>