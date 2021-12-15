<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Madlibs</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Madlibs</h1>
        <?php
        // Ta emot data som skickas
        $adjective = filter_input(INPUT_POST, 'adjective', FILTER_SANITIZE_STRING);
        $verb = filter_input(INPUT_POST, 'verb', FILTER_SANITIZE_STRING);
        $food = filter_input(INPUT_POST, 'food', FILTER_SANITIZE_STRING);
        $noun = filter_input(INPUT_POST, 'noun', FILTER_SANITIZE_STRING);
        $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
        $bodyPart = filter_input(INPUT_POST, 'bodypart', FILTER_SANITIZE_STRING);

        // Skriv ut madlibs-texten
        if ($adjective and $verb and $food and $noun and $number and $bodyPart){
            // Need to get accesed for vars bellow
            $verbs = ['kiss' ,'hug', 'flirt', 'attract'];

            // Testing phpDoc
            /** @param array $arr Enter array with verbs
             * @return int Returns a random number 
            */
            function getNumber($arr) {
                return rand(0, count($arr) - 1);
            }

            $verb = $verbs[getNumber($verbs)] . "ing";
            $verb2 = $verbs[getNumber($verbs)] . "ing";
            $verb3 = $verbs[getNumber($verbs)] . "ing";
            echo "
            <p class=\"madlibs\">
            <b>Mario</b>: what a/an $adjective day, eh Luigi? The perfect day for $verb some Koopas. The food Kingdom is crawling with them

            <br>

            <b>Luigi</b>: You're right about that, dear $noun. I hope you're ready to $verb2.

            <br>

            <b>Mario</b>: Ready? I've waited $number of years to $verb3 that scoundrel Bowser!
            
            <br>

            <b>Luigi</b>: First I'll $verb4 and grab a/an $food. That'll give me $noun.

            </p>
            ";
        }
        ?>
    </div>
</body>
</html>