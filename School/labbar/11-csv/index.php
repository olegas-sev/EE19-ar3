<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skriv ut csv-fil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>NTI lunchrestauranger</h1>
        <form class="bg-light" action="#" method="POST">
            <label>Ange filnamn</label>
            <input class="form-control" type="text" name="filnamn">
            <button type="submit" class="btn btn-primary">Läs in</button>
        </form>
        <?php
            $fileName = filter_input(INPUT_POST, "filnamn", FILTER_SANITIZE_STRING);
            if ($fileName) {
                if (file("$fileName.csv")) {
                $rader = file("$fileName.csv");

                // var_dump($rader);
                // echo "<p>Läser filen..</p>";
                echo "<table class=\"table\">";
                echo "<thead><tr><th scope=\"col\">#</th><th scope=\"col\">Restaurang</th><th scope=\"col\">Gata</th><th scope=\"col\">Postnummer</th><th scope=\"col\">Stad</th></tr></thead><tbody>";
                    foreach ($rader as $nr => $rad) {
                        $radArr = explode(',', $rad);
                        echo "<tr><th scope=\"row\">$nr</th><td>$radArr[0]</td><td>$radArr[1]</td><td>$radArr[2]</td><td>$radArr[3]</td></tr>";
                    }
                echo "</tbody></table>";
                } else {
                    echo "
                    <div class=\"alert alert-warning\" role=\"alert\">
                    File was not found!
                    </div>";
                }
            }
        ?>
    </div>
</body>
</html>