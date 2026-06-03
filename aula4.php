<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<title>Validações</title>

</head>

<body>



<form onsubmit="returnvalidar()">



<label>CPF:</label><br>

<input type="text" id="cpf"><br><br>



<label>Senha:</label><br>

<input type="password" id="senha"><br><br>



<label>Email:</label><br>

<input type="text" id="email"><br><br>



<label>Apenas números:</label><br>

<input type="text" id="numero"><br><br>



<button type="submit">Enviar</button>



</form>



<script>

functionvalidar() 
{




    letcpf = document.getElementById("cpf").value.replace(/\D/g, "")

    letsenha = document.getElementById("senha").value

    letemail = document.getElementById("email").value

    letnumero = document.getElementById("numero").value



    letregexCPF = /^\d{11}$/

    letregexSenha = /^(?=.*[A-Z]).{8,}$/

    letregexEmail = /^[^@]+@[^@]+\.com$/

    letregexNumero = /^\d+$/



    if (!regexCPF.test(cpf)) {

        alert("CPF deve ter 11 números")

        returnfalse

    }



    if (!regexSenha.test(senha)) {

        alert("Senha deve ter 8 caracteres e 1 maiúscula")

        returnfalse

    }



    if (!regexEmail.test(email)) {

        alert("Email inválido")

        returnfalse

    }



    if (!regexNumero.test(numero)) {

        alert("Digite apenas números")

        returnfalse

    }



    returntrue

}

</script>



</body>

</html>

