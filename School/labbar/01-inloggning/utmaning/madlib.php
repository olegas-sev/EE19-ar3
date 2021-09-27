<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Madlib</h1>
        <?php
        // Ta emot data som skickas
        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
        $adjektiv = filter_input(INPUT_POST, 'adjektiv', FILTER_SANITIZE_STRING);
        $plats = filter_input(INPUT_POST, 'plats', FILTER_SANITIZE_STRING);
        $verb = filter_input(INPUT_POST, 'verb', FILTER_SANITIZE_STRING);
        $svordom = filter_input(INPUT_POST, 'svordom', FILTER_SANITIZE_STRING);
        $nummer = filter_input(INPUT_POST, 'nummer', FILTER_SANITIZE_STRING);
        $dryck = filter_input(INPUT_POST, 'dryck', FILTER_SANITIZE_STRING);
        
        // Kolla om användarnamn och lösenord stämmer
        
        echo "<p>
        $namn $verb I $plats och har känt sig $adjektiv, men $namn råkade ramla ned och sa <i>\"$svordom!\"</i>, detta ledde till att $namn gick hem och drack $nummer antal $dryck's
        </p>";
        
        ?>
    </div>
</body>
</html>