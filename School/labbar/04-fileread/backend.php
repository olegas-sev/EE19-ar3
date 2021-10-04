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
                    <a class="nav-link" href="read.php">Läsa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Radera</a>
                </li>
            </ul>
        </nav>
        <?php
        // Datum
        setlocale(LC_ALL, "sv_SE.utf8");
        $dagensDatum = strftime("%A %y %B");

        // Ta emot data som skickas
        $rubrik = filter_input(INPUT_POST, 'rubrik', FILTER_SANITIZE_STRING);
        $meddelande = filter_input(INPUT_POST, 'meddelande', FILTER_SANITIZE_STRING);
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);

        // Finns data?  
        if ($rubrik && $meddelande && $namn) {
            // Filnamnet
            $filnamn = "gastbok.txt";

            // Texten att spara
            $texten = "<h2>$rubrik</h2>";
            $texten .= "<span>$dagensDatum</span>";
            $texten .= "<p>$meddelande</p>";
            $texten .= "<p>$namn</p>";

            // Spara i textfil
            file_put_contents($filnamn, $texten, FILE_APPEND);

            // Bekräftelse
            echo "<p class=\"alert alert-success\">Meddelandet har sparats!</p>";
        } else {
            echo "<p class=\"alert alert-warning\">Inget sparat!</p>";
        }
        ?>
    </div>
</body>
</html>