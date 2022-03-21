<?php
include('konfigdb.php')
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <div>
            <?php
            // Ta emot data från formuläret
            $name = filter_input(INPUT_POST, "namn");
            $email = filter_input(INPUT_POST, "emejl");
            $password = filter_input(INPUT_POST, "lösenord");


            if ($name and $email and $password) {
              // var_dump($name, $email, $password);
              // 1. SQL-Kommandon
              $sql = "INSERT INTO register (namn, epost, hash) VALUES ('$name', '$email', '$password')";

              // 2. Kör SQL
              $resultat = $conn->query($sql);

              // 3. Funkade SQL-kommandon?
              if (!$resultat) {
                die("Något gick fel");
              } else {
                echo ("<p>Användaren är skapat</p>");
              }
            } else {
              echo "<h1>Gå härifrån</h1>";
            }
            ?>
        </div>
    </div>
</body>
</html>