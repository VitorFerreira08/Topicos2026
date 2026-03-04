<!DOCTYPE html>
<html>
<body>

<form method="post">
    Média final: <input type="number" name="MF" step="0.1">
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($_POST['MF'])) {

    $MF = $_POST['MF'];  // Variável recebe o valor do formulário

    if ($MF <= 1.7) {
        echo "Não pode fazer exame";
    }
    else if ($MF >= 7.0) {
        echo "Aprovado";
    }
    else {
        $NE = 10 - $MF;
        echo "Precisa tirar " . $NE . " no exame";
    }
}
?>

</body>
</html>