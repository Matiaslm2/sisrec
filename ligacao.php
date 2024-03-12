<?php
$servername = "localhost";
$username = "sisrec";
$password = "bEZLkPj2yhMyZh3";
$db= "sisrec";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
  die("Falhou a ligação: " . $conn->connect_error);
}
//echo "Ligação bem sucedida";

?>