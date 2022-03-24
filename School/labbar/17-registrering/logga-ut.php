<?php
include('konfigdb.php');
session_start();
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between p-3">
                <ul class="nav nav-pills">
                    <?php
                    if (!$_SESSION['inloggad'] == true) {
                      echo "
                      <li class=\"nav-item\">
                        <a class=\"nav-link active\" aria-current=\"page\" href=\"./logga-in.php\">Inloggning</a>
                    </li>
                      ";
                    }
                    ?>

                    <li class="nav-item">
                        <a class="nav-link" href="./registrera.php">Registrera</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php
                                            if (!$_SESSION['inloggad'] == true) {
                                              echo "disabled";
                                            }
                                            ?>" href=" ./logga-ut.php">Log out</a>
                    </li>
                </ul>
                <?php
                if ($_SESSION['inloggad'] == true) {
                  echo "<div>Inloggad</div>";
                }
                ?>
            </nav>
            <h1>Du loggade ut</h1>

        </div>
    </div>
</body>
</html>