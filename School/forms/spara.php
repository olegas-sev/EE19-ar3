<?php
// Variabler
$namn = $_POST["namn"];
$mejl = $_POST["mail"];
$mobil = $_POST["mobil"];

// Skriva ut
echo "
<h1>Tar emot data med PHP</h1>
<p>
Hej $namn!, du är inloggad med <i>$mejl</i> med (+46) $mobil
</p>

";

// If satser
if( $namn == "Olegas") {
    echo "<p>Hej vad trevligt att du har kommit tbx</p>";
} else {
    echo "<p>Hej, du är ny här</p>";
}
?>