<?php
$produto = [
    "nome" => "Iphone 13",
    "preco" => 2300,
    "estoque" => 20
];

foreach ($produto as $chave => $valor) {
    echo "$chave: $valor <br>";
}
?>