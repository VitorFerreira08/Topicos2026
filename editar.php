<?php
include('conexao.php');

$id = $_GET['id'];


$sql = "SELECT * FROM contatos WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 1) {
    $contato = mysqli_fetch_assoc($resultado);
} else {
    echo "Contato não encontrado na base.";
    exit;
}

?>


<form method="post">
    Nome: <input type="text" name="nome" value="<?php echo $contato['nome']; ?>"></br>
    Endereço: <input type="text" name="endereco" value="<?php echo $contato['endereco']; ?>"></br>
    Telefone: <input type="text" name="fone" value="<?php echo $contato['telefone']; ?>"></br>
    <input type="submit" name="atualizar" value="Atualizar">
</form>
