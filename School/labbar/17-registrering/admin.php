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
            <main>
            </main>
        </div>
    </div>
</body>
</html>