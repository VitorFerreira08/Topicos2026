<?php
$frutas = ["Pera", "Maça", "Jabuticaba", "Melancia", "Banana"];

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

$frutas[] = "Manga";

echo "<hr>Nova fruta:<br>";

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
?>