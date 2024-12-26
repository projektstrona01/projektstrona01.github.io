<?php
header('Content-Type: application/json; charset=utf-8');
include 'db_connection.php'; // Połączenie z bazą danych


// Sekcja Nowości
$query_nowosci = "SELECT * FROM produkty WHERE id IN (1, 2, 3)";
$result_nowosci = $conn->query($query_nowosci);
$produkty_nowosci = array();
while ($row = $result_nowosci->fetch_assoc()) {
    $produkty_nowosci[] = $row;}

// Sekcja Hity
$query_hity = "SELECT * FROM produkty WHERE id IN (4, 5, 6)";
$result_hity = $conn->query($query_hity);
$produkty_hity = array();
while ($row = $result_hity->fetch_assoc()) {
    $produkty_hity[] = $row;}

// Sekcja Wyprzedaż
$query_wyprzedaz = "SELECT * FROM produkty WHERE id IN (7, 8, 9)";
$result_wyprzedaz = $conn->query($query_wyprzedaz);
$produkty_wyprzedaz = array();
while ($row = $result_wyprzedaz->fetch_assoc()) {
    $produkty_wyprzedaz[] = $row;}

// Zwrócenie wyników w JSON
echo json_encode([
    'nowosci' => $produkty_nowosci,
    'hity' => $produkty_hity,
    'wyprzedaz' => $produkty_wyprzedaz
]);
?>