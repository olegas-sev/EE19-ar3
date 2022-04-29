<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Boostrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Boostrap JS -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./../style.css">
</head>

<body>
  <div class="container-sm">
    <div class="divider">
      <h1>Filmer <?php if (isset($_POST['search'])) {
                    echo "| Results for: {$_POST['search']}";
                  }  ?></h1>
    </div>

    <main>
      <section class="mb-3">
        <form action="#" method="post">

          <div class="col-6 mb-3">
            <label for="search" class="form-label">Search</label>
            <input type="search" class="form-control" name="search" id="search">
          </div>
          <button type="submit" id="search" class="btn btn-primary">Search</button>
        </form>
      </section>


      <?php

      $search = filter_input(INPUT_POST, 'search');
      if ($search) {

        // Configs
        $apiKey = "ea805224";
        // GET data
        $url = "https://www.omdbapi.com/?apikey=$apiKey&s=$search";
        $json = file_get_contents($url);
        $data = json_decode($json);
        // Destructuring main info

        if ($data->Response == "False") {
          echo "<h1>Sorry nothing found</h1>";
        } else {
          $searchData = $data->Search;
          echo "<div class='row row-cols-1 row-cols-md-2 g-4'>";
          foreach ($searchData as $film) {
            $title = $film->Title;
            $year = $film->Year;
            $type = $film->Type;
            $imgSrc = $film->Poster;

            echo "
            <div class='col'>
            <div class='card mb-3 bg-dark' style='max-width: 540px;'>
  <div class='row g-0'>
    <div class='col-md-4'>
      <img src='$imgSrc' class='img-fluid rounded-start' alt='Image of $type called $title'>
    </div>
    <div class='col-md-8'>
      <div class='card-body'>
        <h5 class='card-title'>$title ($year)</h5>
        <p class='card-text'>This is a $type that is called $title it's really good and we highly suggest it.</p>
        <p class='card-text'><small class='text-muted'>Category: $type</small></p>
      </div>
    </div>
  </div>
</div>
</div>

            ";
          }
          echo "</>";
        }
      } else {
        echo "<h1>Start by searching</h1>";
      }
      ?>

    </main>

  </div>
</body>

</html>