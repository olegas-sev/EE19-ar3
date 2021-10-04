<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästboken</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Gästboken</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Skapa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="read.php">Läsa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Radera</a>
                </li>
            </ul>
        </nav>
        <?php

        $filnamn = "gastbok.txt";
        $text = file_get_contents($filnamn);
        if (!$text) {
            $text = "<h2>Text was not found..</h2>";
        }
        echo "
        <div class=\"messages\">$text</div>
        ";

        ?>
    </div>
</body>
</html>