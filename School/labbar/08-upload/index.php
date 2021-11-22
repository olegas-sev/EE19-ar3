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
                    <a class="nav-link active" href="index.html">Ladda upp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="se.php">Se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Radera</a>
                </li>
            </ul>
        </nav>
        <form action="" method="POST" enctype="multipart/form-data">
            <?php
            $name = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);



            if (isset($_POST['submit'])) {
                $file = $_FILES['file'];

                $fileTmpName = $file['tmp_name'];
                $fileName = $file['name'];
                $fileError = $file['error'];

                $fileExt = strtolower(end(explode('.', $fileName)));
                $fileDestination = "./uploads/$name.$fileExt";
                $allowedExt = array('jpg', 'jpeg', 'png', 'webp', 'gif');

                if (in_array($fileExt, $allowedExt)) {
                    if ($fileError === 0) {
                        move_uploaded_file($fileTmpName, $fileDestination);
                        echo "<p class=\"alert alert-success\">Filen är uppladad! Du kan se den <a href=\"./se.php\">här</a>!</p>";
                    } else {
                        echo "<p class=\"alert alert-warning\">Lyckades inte ladda upp filen, vänligen försök igen</p>";
                    }
                } else {
                    echo "<p class=\"alert alert-warning\">Du kan inte använda $fileExt bara $allowedExt fil formater är tilåtna!</p>";
                }
            }
            ?>
            <div class="form-groups">
                <label>Namn</label>
                <input type="text" name="namn" value="Olegas" required>
            </div>
            <div class="form-group">
                <label class="form-label mt-4">Please upload an image</label>
                <input class="form-control" type="file" name="file">
            </div>
            <button type="submit" name="submit" class="primary">Ladda upp</button>
        </form>
    </div>
</body>
</html>