<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>År kvar</title>
    <link rel="stylesheet" href="../../../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h3>År kvar till 2100</h3>
        <form action="./backend.php" method="post">
            <div class="mb-3">
                <label for="årtal">Ange årtal</label>
                <input class="form-control" name="årtal" type="number" id="årtal"></input>
            </div>
            <button type="submit" class="btn btn-primary">Omvandla</button>
        </form>
    </div>
    <script src="./script.js"></script>
</body>
</html>