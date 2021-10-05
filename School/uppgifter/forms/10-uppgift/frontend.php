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
            <form action="./backend.php" method="POST">
                <div class="mb-3 kol">
                    <label for="temp" class="form-label">Omvandalare</label>
                    <input type="text" name="temp" class="form-control" id="temp" aria-describedby="temp">
                </div>

                <div class="kol">
                    <label class="form-label">Sätt:</label>
                    <div class="d-flex">
                        <div class="form-check form-switch mr-10">
                            <input class="form-check-input ctof" name="ctof" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">C&deg; till F&deg;</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input ftoc" name="ftoc" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">F&deg; till C&deg;</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
    <script>
        const ctof = document.querySelector('.ctof')
        const ftoc = document.querySelector('.ftoc')
        const checkboxes = document.querySelectorAll(".form-check-input")
        
        checkboxes.forEach(el => {
            console.log(el);
            el.addEventListener("click", function(e) {
                console.log(e);
            })
        })
        
        
    </script>
</body>
</html>
