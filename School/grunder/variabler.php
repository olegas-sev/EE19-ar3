<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Variabler i PHP</h1>
    <?php
    $förnamn = "Olegas";
    $efernamn = "Sevcenko";
    setlocale(LC_ALL, "sv_SE.utf8");
    $date = strftime("%A %B %Y");

    echo "$förnamn $efernamn <br>";
    echo "<br>Today's date is " . date("l d F Y");
    echo "<br>Dagens datum är " . $date;
    ?>
</body>
</html>