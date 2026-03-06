<?php
$alunos = [
    ["nome" => "Vitor", "nota" => 10],
    ["nome" => "Luiza", "nota" => 6],
    ["nome" => "Maria", "nota" => 3]
];

$soma = 0;
$maiorNota = 0;
$melhorAluno = "";

foreach ($alunos as $aluno) {
    $soma += $aluno["nota"];

    if ($aluno["nota"] > $maiorNota) {
        $maiorNota = $aluno["nota"];
        $melhorAluno = $aluno["nome"];
    }
}

$media = $soma / count($alunos);

echo "Média das notas: $media <br>";
echo "Maior nota: $maiorNota <br>";
echo "Melhor aluno: $melhorAluno <br>";
?>