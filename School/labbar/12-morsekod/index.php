<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Text till morsekod</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Omvandla text till morsekod</h1>
        <form action="#" method="POST">
            <textarea name="texten" cols="30" rows="10"></textarea>
            <button type="submit" class="btn btn-primary">Skicka</button>
        </form>
        <?php
        // Morsealfabetet
        $morse["A"] = ".-";
        $morse["B"] = "-...";
        $morse["C"] = "-.-.";
        $morse["D"] = "-..";
        $morse["E"] = ".";
        $morse["F"] = "..-.";
        $morse["G"] = "--.";
        $morse["H"] = "....";
        $morse["I"] = "..";
        $morse["J"] = ".---";
        $morse["K"] = "-.-";
        $morse["L"] = ".-..";
        $morse["M"] = "--";
        $morse["N"] = "-.";
        $morse["O"] = "---";
        $morse["P"] = ".--.";
        $morse["Q"] = "--.-";
        $morse["R"] = ".-.";
        $morse["S"] = "...";
        $morse["T"] = "-";
        $morse["U"] = "..-";
        $morse["V"] = "...-";
        $morse["W"] = ".--";
        $morse["X"] = "-..-";
        $morse["Y"] = "-.--";
        $morse["Z"] = "--..";
        $morse["Å"] = ".--.-";
        $morse["Ä"] = ".-.-";
        $morse["Ö"] = "---.";
        $morse[" "] = " ";


        $texten = filter_input(INPUT_POST, "texten", FILTER_SANITIZE_STRING);
        if ($texten) {
            $svaret = "";
            $stora = strtoupper($texten);
            var_dump($stora);
            $bokstäverna = str_split($stora);
            var_dump($bokstäverna);
            foreach ($bokstäverna as $key => $bokstav) {
                $svaret .= "$morse[$bokstav] "; 
            }
            echo $svaret;

        }
        ?>
    </div>
</body>
</html>