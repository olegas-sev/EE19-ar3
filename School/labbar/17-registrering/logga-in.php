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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./logga-in.php">Inloggning</a>
                    </li>

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
            <h1>Logga in</h1>
            <main>
                <form action="logga-in.php" method="post" class="mb-2">
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


                    <button type="submit" class="btn btn-primary">Logga in</button>
                </form>
                <?php
                // Ta emot data från formuläret
                $email = filter_input(INPUT_POST, "emejl");
                $password = filter_input(INPUT_POST, "lösenord");


                if ($email and $password) {
                  // var_dump($name, $email, $password);
                  // Kolla att användarnamnet eller email inte redan används
                  $sql = "SELECT hash FROM register WHERE epost = '$email'";
                  $resultatCheck = $conn->query($sql);
                  $row = mysqli_fetch_array($resultatCheck, MYSQLI_ASSOC);
                  if (password_verify($password, $row['hash'])) {
                    $sql = "SELECT * FROM register WHERE epost = '$email'";
                    $resultatCheck = $conn->query($sql);
                    $row = mysqli_fetch_array($resultatCheck, MYSQLI_ASSOC);
                    // var_dump($row);
                    $användare_namn = $row['namn'];
                    echo "
                    <div class=\"alert alert-success\" role=\"alert\">
                    Inloggningen lyckades!
                    </div>
                    <h2>Välkommen <b>$användare_namn</b>!</h2>
                    ";

                    // Session att man är inloggad
                    $_SESSION['inloggad'] = true;
                  } else {
                    die("<div class=\"alert alert-danger\" role=\"alert\">
                    Fel mejl-adress eller lösenord. Vänligen försök igen!
                  </div>");
                  }
                }

                ?>
            </main>
        </div>
    </div>
</body>
</html>