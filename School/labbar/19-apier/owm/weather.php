<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Boostrap JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./../style.css">
</head>
<body>
<div class="container-sm">
    <div class="divider">
        <h1>Dagens Chuck Norris Skämt</h1>
    </div>
    <main>
        <?php
        echo "<div class='post'>";
        // Configs
        $appid = "22ee1d58f7adae08ee71fa7c0bd24481";
        $stad = "stockholm";

        // GET data
        $url = "http://api.openweathermap.org/data/2.5/weather?q=$stad&appid=$appid&units=metric&lang=se";
        $json = file_get_contents($url);
        $data = json_decode($json);
        // Destructuring main info
        $weather = $data->weather;
        $main = $data->main;
        $wind = $data->wind;


        $temp = $main->temp;
        $speed = $wind->speed;
        $description = $weather[0]->description;
        $iconUrl = $weather[0]->icon;
        echo "
        <div>
            <div class='post-header'><h1 class='stad'>$data->name</h1><img src='http://openweathermap.org/img/wn/$iconUrl@2x.png' alt='stad ikon'></div>
            <h5>Temperaturen: $temp&deg;C</h5>
            <br />
            <h5>Hastigheten: $speed m/s</h5>
            <br />
            <h5>Vädret är: $description</h5>
        </div>";
        echo "</div>";
        ?>
    </main>
</div>
</body>
</html>