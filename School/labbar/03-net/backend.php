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
        <h1 class="display-4">Inloggning</h1>
        <?php
        // Ta emot data som skickas
            // Ta emot data som skickas
            $ip = filter_input(INPUT_POST, 'ip', FILTER_SANITIZE_STRING);
            $subnetmask = filter_input(INPUT_POST, 'subnetmask', FILTER_SANITIZE_STRING);
            $defaultgateway = filter_input(INPUT_POST, 'dg', FILTER_SANITIZE_STRING);
        // Finns data?
        if ($ip && $subnetmask && $defaultgateway) {
            // Namn filen som sparas
            $filnamn = "net.txt";

            // Sätt samman texten
            
            $texten = "ip: $ip\n";
            $texten .= "subnet mask: $subnetmask\n";
            $texten .= "default-gateway: $defaultgateway\n";
            
            file_put_contents($filnamn, $texten);
            // Berätta för användaren att texten har sparats
            echo "<p class=\"alert alert-success\">Din meddelande har sparats!</p>";
        } else {
            echo "<p class=\"alert alert-warning\">Inputs var tomma!</p>";
        }
        ?>
    </div>
</body>
</html>