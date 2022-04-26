<?php
include "./user-validator.php";

// Kolla att data skickats
$username = filter_input(INPUT_POST, "username");
$email = filter_input(INPUT_POST, "email");

if ($username and $email) {
  $controll = new UserValidator($_POST);
  // Full Post data
  // var_dump($_POST);

  $controll->ValidateUsername();
  $controll->ValidateEmail();
  $controll->ValidatePassword();

  // var_dump($controll);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <!-- Boostrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Boostrap JS -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Custom styles -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container-sm">
    <div class="divider">
      <h1>Modal fönstret</h1>
    </div>

    <?php
    if ($controll->error) {
    ?>
      <!-- Validator window -->
      <div class="d-flex justify-content-center">
        <div class="alert alert-warning" role="alert">
          <ul class="list-group list-group-numbered">
            <?php
            foreach ($controll->error as $errorMsg) {
              echo "<li class=\"list-group-item-warning \">$errorMsg</li>";
            }
            ?>
          </ul>
        </div>
      </div>
    <?php
    } else {
    ?>
      <div class="d-flex justify-content-center">

        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Welcome!</h4>
          <p>Aww yeah, you successfully logged and now you get this alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
          <hr>
          <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        </div>
      </div>
    <?php
    }

    ?>
    <main>
      <form action="#" method="post">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="username" class="form-control" name="username" id="username">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="row">
          <div class="col-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
          </div>
          <div class="col-6 mb-3">
            <label for="passwordRepeat" class="form-label">Repeat Password</label>
            <input type="passwordRepeat" class="form-control" name="passwordRepeat" id="passwordRepeat">
          </div>
        </div>
        <button type="submit" id="login" class="btn btn-primary">Login</button>
      </form>
    </main>

  </div>
</body>

</html>