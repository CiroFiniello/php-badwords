<?php
// Check if 'censuro' key exists in $_GET before using it
// $censuro = isset($_GET["censuro"]) ? $_GET["censuro"] : '';
    $censuro = $_GET["censuro"];
// Replace 'e' with '*' in the censuro variable
$censored = str_replace("e", "*", $censuro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <p>
    <?php
    $test = "bestie";
    echo "zao! ";
    echo $test;
    echo strlen($test);
    ?>
    </p>
<h1>Parte due dell'esercizio:</h1>
<form action="./index.php" method="GET">
    <input type="text" name="censuro" id="i-censuro">
    <button type="submit"> CENSURA! </button>
</form>
    <h1>
        la parola che verrà modificata è :
        <?php
        echo $censored;
        ?>
    </h1>
        
    <pre>
            <?php 
            // var_dump($_GET);
            ?>
    </pre>
</body>
</html>