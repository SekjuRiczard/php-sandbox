<?php
// Włączenie wyświetlania błędów (tylko do testów!)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Dołączenie pliku config.php
include '../back/config.php';

// Sprawdzenie połączenia
if (!$connection) {
    die("❌ Błąd połączenia z bazą: " . mysqli_connect_error());
} else {
    echo "✅ Połączenie działa poprawnie!";
}
?>
