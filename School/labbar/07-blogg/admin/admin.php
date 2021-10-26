<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästboken</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark">
    <div class="container p-5 mt-5 bg-white p-3 mb-5 rounded">
        <h1 class="display-4 mb-3 font-weight-normal">Anipedia</h1>
        <nav>
            <ul class="nav nav-tabs d-flex justify-content-between">
                <div class="d-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Startsida</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Radera</a>
                    </li>
                </div>
                <div>
                    <li class="nav-item">
                        <a class="nav-link text-danger active disabled" href="#">Logout</a>
                    </li>
                </div>
            </ul>
        </nav>
        <main class="mt-4">
            <form action="./spara.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Topic</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="topicHelp" placeholder="Enter topic" name="topic">
                    <small id="topicHelp" class="form-text text-muted">Make sure it's not longer than 20
                        characters.</small>
                    <label class="form-label mt-4">Message</label>
                    <input type="text" class="form-control" placeholder="Write your content here" name="message">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </main>
    </div>
</body>
</html>