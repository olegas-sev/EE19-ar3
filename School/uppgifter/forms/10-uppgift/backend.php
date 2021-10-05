<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 10</title>
    <link rel="stylesheet" href="../../../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="mb-5">
        <div class="kontainer">
            <h3 class="mb-3">Temperaturomvandlare</h3>
            <?php 
            $temp = filter_input(INPUT_POST, 'temp', FILTER_SANITIZE_STRING);
            $ftoc = filter_input(INPUT_POST, 'ftoc', FILTER_SANITIZE_STRING);
            $ctof = filter_input(INPUT_POST, 'ctof', FILTER_SANITIZE_STRING);
            $f = "F&deg; (Fahrenheit)";
            $c = "C&deg; (Celsius)";
            if (!$ftoc and !$ctof) {
                echo "<p>No options were picked, please try again</p>";
            } else {
                if ($ftoc === 'on') {
                    $celsius = ($temp - 32) * .5556;
                    echo "<p>$temp $f is $celsius $c</p>";
                }
    
                if ($ctof === 'on') {
                    $fahrenheit = ($temp * 1.8) + 32;
                    echo "<p>$temp $c is $celsius $f</p>";
                }
            }

            ?>
            <button type="submit" class="btn btn-primary mt-3" onclick="goBack()">
                Gå tillbaka
            </button>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>