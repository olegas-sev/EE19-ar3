<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>År kvar</title>
    <link rel="stylesheet" href="../../../bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="kontainer">
        <h3>År kvar till 2100</h3>
        <?php
        $årtal = filter_input(INPUT_POST, 'årtal', FILTER_SANITIZE_STRING);
        
        if ($årtal >= 2100) {
            echo "<p>Du är redan över 2100</p>";
        } else {
            $kvar = 2100 - $årtal; 
            echo "<p> Det är $kvar år kvar tills 2100 </p>";
        }
        ?>
        <button type="submit" class="btn btn-primary mt-3" onclick="goBack()">
            Gå tillbaka
        </button>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>