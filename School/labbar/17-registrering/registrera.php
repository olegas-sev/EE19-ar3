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
                        <a class="nav-link active" aria-current="page" href="./registrera.php">Registrera</a>
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
            <h1>Registrera sig</h1>

            <main>
                <form action="registrera.php" method="post" class="mb-2">
                    <div class="row mb-3">
                        <label for="namn" class="col-sm-2 col-form-label">Namn</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namn" name="namn">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Mejl-adress</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="emejl">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Lösenord</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="lösenord">
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Skapa konto</button>
                </form>
                <?php
                // Ta emot data från formuläret
                $name = filter_input(INPUT_POST, "namn");
                $email = filter_input(INPUT_POST, "emejl");
                $password = filter_input(INPUT_POST, "lösenord");


                if ($name and $email and $password) {
                    // var_dump($name, $email, $password);

                    // Kolla att användarnamnet eller email inte redan används
                    $sql = "SELECT * FROM register WHERE namn = '$name' OR epost = '$email'";

                    $resultatCheck = $conn->query($sql);

                    // Hittar vi samma?
                    if ($resultatCheck->num_rows > 0) {
                        echo ("
                <div class=\"alert alert-warning\" role=\"alert\">
                  Användarnamn eller emejl används redan!
                </div>
                ");
                    } else {


                        // Räkna fram ett hash på lösenordet
                        $hash = password_hash($password, PASSWORD_DEFAULT);
                        // 1. SQL-Kommandon
                        $sql = "INSERT INTO register (namn, epost, hash) VALUES ('$name', '$email', '$hash')";

                        // 2. Kör SQL
                        $resultat = $conn->query($sql);

                        // 3. Funkade SQL-kommandon?
                        if (!$resultat) {
                            die("Något gick fel");
                        } else {
                            echo ("
                <div class=\"alert alert-success\" role=\"alert\">
                  Användaren <b>$name</b> är skappat!
                </div>
                ");
                        }
                    }
                }

                ?>
            </main>
        </div>
    </div>
</body>
</html>