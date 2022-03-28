<?php
include('konfigdb.php');
session_start();

if (!isset($_SESSION['inloggad'])) {
    $_SESSION['inloggad'] = false;
}
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <div class="container">
        <div>
            <?php
            include('./components/navbar.php')
            ?>
            <h1>Admin</h1>
            <?php
            // SQL satsen
            $sql = "SELECT * FROM register";
            // kör SQL Satsen
            $resultat = $conn->query($sql);

            if (!$resultat) {
                die('<p class=\"alert alert-warning\">Gick inte att köra sql satsen</p>');
            } else {
                echo "<table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">Namn</th>
                    <th scope=\"col\">Epost</th>
                  </tr>
                </thead>
                <tbody>
                ";
                while ($rad = $resultat->fetch_assoc()) {
                    echo "
                    <tr>
                    <th scope=\"row\">$rad[id]</th>
                    <td>$rad[namn]</td>
                    <td>$rad[epost]</td>
                    </tr>
                    ";
                }
                echo "</tbody>
                </table>";
            }

            ?>
            <main>
            </main>
        </div>
    </div>
</body>

</html>