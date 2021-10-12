<?php
$ett = '$noll';
echo "<p>$ett</p>";
echo '<p>$ett</p>';

// Först så märker man att variabel $ett blir assignar till '$noll' det jag märker är att den ser det som en string och inte en annan variable man kan pointa till. 

// VIlket betyder:
// 1. strings med ' ' singel fluttor kan inte ta in variabler den läsas som en plaint text

// Samma gäller till rad 3 och 4 alltså:
// 1. Rad 3 kommer skrivas ut som en variabel alltså $noll.
// 2. Rad 4 kommer skrivas ut som en string alltså $ett.
?>