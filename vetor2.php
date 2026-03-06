<?php
$numeros = [10, 20, 30, 40, 50];

unset($numeros[3]);

echo "Elementos restantes:<br>";

foreach ($numeros as $numero) {
    echo $numero . "<br>";
}
?>