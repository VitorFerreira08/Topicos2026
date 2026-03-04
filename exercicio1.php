<?php

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];

echo "<h2>Resultado:</h2>";

echo "Nome: " . $nome . "<br>";

if ($idade > 18) {

    echo "Minha idade é : " . $idade . "<br>";
    echo "Sexo: " . $sexo . "<br>";
    echo "Endereço: " . $endereco . "<br>";

} else {

    echo "Menor de idade";

}

?>