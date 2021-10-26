<?php
// Ta emot data
$topic = filter_input(INPUT_POST, "topic", FILTER_SANITIZE_STRING);
// Om data finns
$msg = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

if ($topic and $msg) {
    $texten = "
    <p>
            <div class=\"card text-white bg-primary mb-3\" style=\"max-width: 20rem;\">
  <div class=\"card-header\">Inlägg</div>
  <div class=\"card-body\">
  <h4 class=\"card-title\">$topic</h4>
  <p class=\"card-text\">$msg</p>
  </div>
</div>    
    ";
    file_put_contents("blogg.txt", $texten, FILE_APPEND);
    echo "<p>Meddelande har sparats!</p>";
}
