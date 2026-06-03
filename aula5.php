
<?php 
$erro = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (strlen($_POST["cpf"]) < 14) {
    $erro = "CPF inválido";
  } else {
    echo "Nome: ".$_POST["nome"]."<br>";
    echo "CPF: ".$_POST["cpf"]."<br>";
    echo "Telefone: ".$_POST["telefone"]."<br>";
    echo "Data: ".$_POST["data"]."<br>";
    echo "CEP: ".$_POST["cep"]."<br>";
    echo "Email: ".$_POST["email"]."<br><hr>";
  }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Formulário</title>
</head>

<body>

<div id="resultado"></div>

<h3>Formulário</h3>

<form id="form">

Nome:<br>
<input type="text" id="nome"><br><br>

CPF:<br>
<input type="text" id="cpf"><br><br>

Telefone:<br>
<input type="text" id="telefone"><br><br>

Data de nascimento:<br>
<input type="text" id="data"><br><br>

CEP:<br>
<input type="text" id="cep"><br><br>

E-mail:<br>
<input type="text" id="email"><br><br>

<button type="submit">Enviar</button>

<p id="erro" style="color:red;"></p>

</form>

<script>

cpf.oninput = _ =>
cpf.value = cpf.value
.replace(/\D/g,'')
.replace(/(\d{3})(\d)/,'$1.$2')
.replace(/(\d{3})(\d)/,'$1.$2')
.replace(/(\d{3})(\d{1,2})$/,'$1-$2');

telefone.oninput = _ =>
telefone.value = telefone.value
.replace(/\D/g,'')
.replace(/(\d{2})(\d)/,'($1) $2')
.replace(/(\d{5})(\d)/,'$1-$2');

data.oninput = _ =>
data.value = data.value
.replace(/\D/g,'')
.replace(/(\d{2})(\d)/,'$1/$2')
.replace(/(\d{2})(\d)/,'$1/$2');

cep.oninput = _ =>
cep.value = cep.value
.replace(/\D/g,'')
.replace(/(\d{5})(\d)/,'$1-$2');

form.onsubmit = function(e) {

  erro.textContent = "";

  if (
    cpf.value.length < 14 ||
    telefone.value.length < 15 ||
    data.value.length < 10 ||
    cep.value.length < 9 ||
    !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)
  ) {
    erro.textContent = "Preencha todos os campos corretamente";
    e.preventDefault();
    return;
  }

  e.preventDefault();

  resultado.innerHTML = `
    <h3>Dados Enviados</h3>
    <p><b>Nome:</b> ${nome.value}</p>
    <p><b>CPF:</b> ${cpf.value}</p>
    <p><b>Telefone:</b> ${telefone.value}</p>
    <p><b>Data:</b> ${data.value}</p>
    <p><b>CEP:</b> ${cep.value}</p>
    <p><b>Email:</b> ${email.value}</p>
    <hr>
  `;
};

</script>

</body>
</html>
