<?php
	require 'conexao.php';
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$nomecidade = $_POST['cidade'];
		$codplaca = $_POST['carro'];
		$codloja = $_POST['loja'];
		$datain = $_POST['datain'];
		$datafim = $_POST['datafim'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> XPTOTEC - Aluguel de Carros </title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script>
			function validacartao(){
				var validade = document.getElementById("valcartao").value;
				console.log(validade);
				validade = validade.split("-");
				validade = new Date(validade[0],validade[1],validade[2]);
				validade = validade.getTime();
				var dataatual = Date.now();
				dataatual = dataatual + (30*24*60*60*1000);
				if(validade < dataatual){
					alert("A data de validade do cartão não pode ser anterior à data de hoje. Por favor, escolha uma data válida.");
					document.getElementById("valcartao").value="";
					return false;
				}else{
					return true;
				}
			}
		</script>
	</head>
	<body>
		<header>
            <p>Faculdade de Educação Tecnológica do Estado do Rio de Janeiro<br>
            3DAW Manhã - Prova AV2<br>
            Aluno: Fillipe Gonçalves de Carvalho<br></p> 
        </header>
		<article class = "titulo">XPTOTEC Locadora</article>
		<div class = "corpo">
		<p class = "titulo2">Cadastrar Cliente:</p>
		<form method="POST" class="formulario" action="reserva2.php">
            <p class = "tituloform">Nome: <br><input type="text" id="nome" name="nome" required></p>
            <p class = "tituloform">Idade: <br><input type="text" id="idade" name="idade" required></p>
			<p class = "tituloform">CPF (11 digitos):<br><input type="text" id="cpf" name="cpf" required></p>
            <p class = "tituloform">CNH (11 digitos):<br><input type="text" id="cnh" name="cnh" required></p>
			<p class = "tituloform">Telefone: <br><input type="text" id="telefone" name="telefone" required></p>
			<p class = "tituloform">Número do cartão (16 dígitos): <br><input type="text" id="numerocartao" name="numerocartao" required></p>
			<p class = "tituloform">Nome impresso no cartão: <br><input type="text" id="nomecartao" name="nomecartao" required></p>
			<p class = "tituloform">Validade do cartão: <br><input type="date" id="valcartao" name="valcartao" required></p>
			<p class = "tituloform">Código de Segurança (3 dígitos): <br><input type="text" id="cvv" name="cvv" required></p>
			<input type="hidden" name="nomecidade" value="<?php echo $nomecidade;?>">
			<input type="hidden" name="codplaca" value="<?php echo $codplaca;?>">
			<input type="hidden" name="codloja" value="<?php echo $codloja;?>">
			<input type="hidden" name="datain" value="<?php echo $datain;?>">
			<input type="hidden" name="datafim" value="<?php echo $datafim;?>">
            <input type="submit" id="submit" onclick = "validacartao()" value="Efetuar cadastro"><br>
        </form>
		<a href="home.html"><h4>Retornar</h4></a>
		</div>
	</body>
</html>
