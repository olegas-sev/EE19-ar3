<?php
include('konfigdb.php');

if (!isset($_SESSION['inloggad'])) {
  $_SESSION['inloggad'] = false;
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between p-3">
    <ul class="nav nav-pills">
        <?php
        if ($_SESSION['inloggad'] == true) {
        ?>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./admin.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./logga-ut.php">Log out</a>
            </li>

        <?php

        } else {

        ?>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./logga-in.php">Inloggning</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./registrera.php">Registrera</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="./logga-ut.php">Log out</a>
            </li>
        <?php
        }
        ?>
    </ul>

    <?php
    if ($_SESSION['inloggad'] == true) {
      echo "<div>Inloggad</div>";
    }
    ?>
</nav>