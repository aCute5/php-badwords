<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $paragraph = "Ciao mi chiamo Dario";
    $badWord = $_GET["badword"];
    $arrBadWord = str_split($badWord);
    for ($x = 0; $x <= count($arrBadWord); $x++) {
        echo $filter = "*";
    }
    ?>

    <p>
        Stringa: <?= $paragraph; ?>
    </p>
    <p>
        Lunghezza: <?= strlen($paragraph); ?>
    </p>
    <p> La parola che hai scritto: <?= $badWord; ?>
    </p>
    <p>
        Non si dice! : <?= $filter; ?>
    </p>
    <form method="GET" action="">
        <label for="badword">Non scrivere brutte parole</label>
        <input type="text" id="badword" name="badword">
        <button>Non scrivere cattive Parole</button>
    </form>
</body>

</html>