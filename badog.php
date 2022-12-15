<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP di HTML</title>
</head>
<body>
    <p>hello world!</p>
    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores nam debitis aut fugiat? Repellat soluta dignissimos necessitatibus odio id ullam.</h2>
    
    <!-- Masukkan PHP disini -->
    <?php
        $txt = "PHP";
        $txt2 = "Dodi";
        echo "I love $txt! $txt2!";
    ?>
    <br>
    <?php
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";
    ?>
</body>
</html>