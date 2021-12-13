<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Madlibs</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Madlibs</h1>
        <?php
        // Ta emot data som skickas
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
        $bostad = filter_input(INPUT_POST, 'bostad', FILTER_SANITIZE_STRING);
        $längd = filter_input(INPUT_POST, 'längd', FILTER_SANITIZE_STRING);
        $adjektiv = filter_input(INPUT_POST, 'adjektiv$adjektiv', FILTER_SANITIZE_STRING);
        $mat = filter_input(INPUT_POST, 'mat', FILTER_SANITIZE_STRING);

        // Skriv ut madlibs-texten
        echo "Den gamle mannen, vars namn var $namn, var så $adjektiv.";
        ?>
    </div>
</body>
</html>