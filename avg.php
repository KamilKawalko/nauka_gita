<?php
// Funkcja obliczająca średnią arytmetyczną
function srednia($liczby) {
    $suma = array_sum($liczby);  // Zlicza sumę wszystkich liczb
    $ilosc = count($liczby);     // Zlicza liczbę elementów w tablicy
    return $suma / $ilosc;       // Zwraca średnią
}

// Przykład użycia
$liczby = [5, 10, 15, 20];
echo "Średnia: " . srednia($liczby);
?>
