<?php   
    $paragrafo = "LeBron Raymone James Sr., meglio noto come LeBron James è un cestista statunitense.";

    $paragrafoSostituito = str_replace("James", "***", $paragrafo);

    $censura = $_GET['censura'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="red">
        <h4>Stampo il paragrafo creato con PHP: </h4>
        <p><? echo $paragrafo ?></p>
        <h4>Lunghezza paragrafo: <? echo strlen($paragrafo) ?></h4>
    </div>

    <div class="green">
        <p>Stampo paragrafo sostituito: <? echo $paragrafoSostituito ?></p>
        <h4>Lunghezza paragrafo modificato: <? echo strlen($paragrafoSostituito) ?> caratteri</h4>
    </div>

    <div class="blue">
        <form action="" method="get">
            <label for="censura">Parola da censurare all'interno del paragrafo creato con PHP:</label>
            <input type="text" name="censura">
            <button>Censura</button>
        </form>
        <h4>Nuovo testo con censura</h4>
        <p><?= $paragraphReplace = str_replace($censura, '***', $paragrafo) ?></p>
        <p>Lunghezza: <?= strlen($paragraphReplace) ?> caratteri</p>
    </div>
    
</body>
</html>