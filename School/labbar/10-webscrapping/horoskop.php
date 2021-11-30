<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Dagens horoskop</h1>
        <?php
        $url = "https://astro.elle.se";
        $sidan = file_get_contents($url);

        // Find beginning
        $start = strpos($sidan, "Väduren");

        echo "Horoskopet börjar på poisiton $start";


        $startTexten = strpos($sidan, "<div class=\"o-indenter\">", $start);
        $slutTexten = strpos($sidan, "</div>", $startTexten);

        // Grab element ¨
        $horoskop = substr($sidan, $startTexten, $slutTexten - $startTexten);
        echo "<p>$horoskop</p>";
        ?>
    </div>
</body>
</html>