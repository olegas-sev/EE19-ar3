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
        $url = "https://api.chucknorris.io/jokes/random";
        $json = file_get_contents($url);

        $data = json_decode($json);
        $skämt = $data->value;
        $bildUrl = $data->icon_url;
        $date = date("Y-m-d H:i", strtotime($data->updated_at));

        if ($bildUrl) {
            echo "<div class='post-header'><img src=\"$bildUrl\" alt=\"\"><span class='date'>Last updated: <b>$date</b></span></div>";
        };
        echo "<p class='joke'>$skämt</p>";
        echo "</div>";
        ?>
    </main>
</div>
</body>
</html>