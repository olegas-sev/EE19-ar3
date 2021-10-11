<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Temperaturomvandlare</title>
    <link rel="stylesheet" href="../../../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h3>Till stora bokstäver</h3>
        <form action="./backend.php" method="post">
            <div class="mb-3">
                <label for="texten">Ange texten</label>
                <textarea class="form-control" name="texten" id="texten"></textarea>
            </div>
            <div class="kol2">
                <p>Ange metod</p>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="stora" checked name="riktning" value="stora">
                    <label class="form-check-label" for="stora">TIll stora bokstäver</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="små" name="riktning" value="fc">
                    <label class="form-check-label" for="små">Till små bokstäver</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Omvandla</button>
        </form>
    </div>
    <script src="./script.js"></script>
</body>
</html>