<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $currentYear = date("Y");
    $birthYear = 2003;
    $fyller25 = 25 - ($currentYear - $birthYear);
    echo "Du fyller 25 om $fyller25 år";
    ?>
</body>
</html>