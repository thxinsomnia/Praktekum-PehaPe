<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Test Object PHP</h2>

    <!-- Masukkan PHP Disini -->
    <?php
    class test {
        var $str="Variable Class";
        function set_vars($str)
        {
            $this->str=$str;
        }
    }
    $class=new test;
    echo $class->$str;
    $class->set_vars("Variable Objek");
    echo ("<br>");
    echo $class->str;
    ?>
</body>
</html>