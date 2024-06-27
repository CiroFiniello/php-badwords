<?php
$paragraph = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel magnam asperiores molestias consectetur. Soluta dicta, voluptas possimus officia ex omnis similique quidem ipsa quia corporis nostrum, earum vero, laborum quibusdam.
Recusandae est aperiam quam, nihil quas inventore beatae quisquam a tempore, sed itaque iure esse hic praesentium culpa pariatur, provident quasi aliquid illum nemo. Nam vitae tempora facilis fugit quod.
Numquam consequuntur laudantium quisquam dicta blanditiis nostrum quis accusantium nam laboriosam. Ipsam animi aperiam inventore quidem sunt eligendi repellendus atque nobis dolorum repellat sequi excepturi aliquid itaque, ex beatae distinctio?';

$symbol = "*****";
$badword = isset($_GET['badword']) ? $_GET['badword'] : '';
$_censoredParagraph = str_ireplace($badword, $symbol, $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <section class="plong">
        <h1>Paragrafo iniziale:</h1>
        <p><?php echo $paragraph; ?></p>
        <h1>La lunghezza del paragrafo è: <?php echo strlen($paragraph); ?> caratteri</h1>
    </section>
    <section class="pmod">
        <h1>Paragrafo modificato:</h1>
        <p><?php echo $_censoredParagraph; ?></p>
        <h1>La lunghezza del paragrafo è: <?php echo strlen($_censoredParagraph); ?> caratteri</h1>
    </section>
    <form action="" method="GET">
        <label for="badword">Parola da censurare:</label>
        <input type="text" name="badword" id="badword">
        <button type="submit">Invia</button>
    </form>
</body>
</html>