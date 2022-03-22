<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

$användare = "bloggen_db";
$lösenord = "T_9HC8QlTF.Unv7k";
$databas = "bloggen_db";
$host = "localhost";


$conn = new mysqli($host, $användare, $lösenord, $databas);

if ($conn->connect_error) {
  die("Någonting blev fel!" . $conn->connect_error);
}
