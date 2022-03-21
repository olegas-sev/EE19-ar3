<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <div>
            <h1>Bloggen</h1>
            <nav>

            </nav>
            <main>
                <form action="registrera-db.php" method="post">
                    <div class="row mb-3">
                        <label for="namn" class="col-sm-2 col-form-label">Namn</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namn" name="namn">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Mejl-adress</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="emejl">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Lösenord</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" name="lösenord">
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Skapa konto</button>
                </form>
            </main>
        </div>
    </div>
</body>
</html>