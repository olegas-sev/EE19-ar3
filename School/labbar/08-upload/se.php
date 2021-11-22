<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästboken</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Gästboken</h1>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Ladda upp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="se.php">Se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Radera</a>
                </li>
            </ul>
        </nav>
        <div class="container my-5">
            <?php

                $uploads =  array_diff(scandir('./uploads'), array('.', '..'));
                if ($uploads) {
                    foreach ($uploads as $img) {
                        $name = explode('.', $img)[0];

                        echo "
                        <div class=\"card\" style=\"width: 18rem;\">
                            <img class=\"card-img-top\" src=\"./uploads/$img\" alt=\"Card image cap\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">$name</h5>
                            </div>
                        ";
                    }
                } else {
                    echo "
                    <div class=\"alert alert-warning\" role=\"alert\">
                    No posts were found!
                    </div>";
                };
            ?>
    </div>
</body>
</html>