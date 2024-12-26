<?php
$servername = "localhost";
$username = "root"; // użytkownik bazy danych
$password = ""; // hasło do bazy danych
$dbname = "sklep"; // nazwa bazy danych

// Połączenie
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzamy połączenie
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>