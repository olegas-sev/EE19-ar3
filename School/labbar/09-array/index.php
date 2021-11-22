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
    <div class="container">
        <h1 class="display-4 mb-2">Arrays</h1>
        <ul>
            <?php
            $arr = ['Olegas', 'Maram', 'Mikael', 'Isam'];
            // var_dump($arr);
            foreach ($arr as $key => $value) {
                // echo $key;
                $max = count($arr);
                $min = 0;
                // Subtract 1 out of max due array starting at 0
                $random = rand($min, $max - 1);
                
                echo "<li>$arr[$random] ($random)</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>