<?php
	require 'conexao.php';
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$nomecidade = $_POST['nomecidade'];
		$codplaca = $_POST['codplaca'];
		$codloja = $_POST['codloja'];
		$datain = date_create($_POST['datain']);
		$datafim = date_create($_POST['datafim']);		
		$nomecli = $_POST['nome'];
		$idade = $_POST['idade'];
		$cpf = $_POST['cpf'];
		$cnh = $_POST['cnh'];
		$telefone = $_POST['telefone'];
		$numerocartao = $_POST['numerocartao'];
		$nomecartao = $_POST['nomecartao'];
		$valcartao = $_POST['valcartao'];
		$cvv = $_POST['cvv'];
		
		$sql = "SELECT * FROM carros WHERE codplaca = '$codplaca'";
		$resultado = $conn->query($sql);
		
		if($resultado->num_rows > 0){
			$carro = $resultado->fetch_assoc();
		}
		$valortotal = $carro['precodiaria']*((date_diff($datain, $datafim)->format('%a'))+1);
		
		$sql = "SELECT * FROM lojas WHERE codloja = '$codloja'";
		$resultado = $conn->query($sql);
		
		if($resultado->num_rows > 0){
			$loja = $resultado->fetch_assoc();
		}
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
	</head>
	<body>
		<header>
            <p>Faculdade de Educação Tecnológica do Estado do Rio de Janeiro<br>
            3DAW Manhã - Prova AV2<br>
            Aluno: Fillipe Gonçalves de Carvalho<br></p> 
        </header>
		<article class = "titulo">XPTOTEC Locadora</article>
		<div class = "corpo">
		<h1> Confirmação de reserva: </h1>
		<h2> Prezado cliente, seguem os dados de sua reserva: </h2>
		<h3> Dados cadastrais:</h3>
		<p> Nome: <?php echo $nomecli;?></p>
		<p> Idade: <?php echo $idade;?></p>
		<p> CPF: <?php echo $cpf;?></p>
		<p> CNH: <?php echo $cnh;?></p>
		<p> Telefone: <?php echo $telefone;?></p>
		<p> Número do cartão: <?php echo $numerocartao;?></p>
		<p> Nome impresso no cartão: <?php echo $nomecartao;?></p>
		<p> Validade do cartão: <?php echo $valcartao;?></p>
		<p> Código de Segurança: <?php echo $cvv;?></p><br>
		<h3> Solicitação de reserva:</h3>
		<p> Cidade: <?php echo $nomecidade;?></p>
		<p> Carro escolhido: <?php echo $carro['marca']." ".$carro['modelo']." - ".$carro['cor']." (".$carro['ano'].")";?></p>
		<p> Endereço de retirada: <?php echo $loja['endereco']." - ".$loja['bairro'];?></p>
		<p> Data de retirada: <?php echo $datain->format('d-m-Y');?></p>
		<p> Data de entrega: <?php echo $datafim->format('d-m-Y');?></p>
		<p> Valor da diária: <?php echo $carro['precodiaria'];?></p>
		<p> Valor total: <?php echo $valortotal;?></p>
		<h3>Deseja confirmar os dados acima e efetuar sua reserva?</h3>
		<div class="botoes">
		<form method="POST" action="reservaeffect.php">
			<input type="submit" id="submit" value="Confirmar reserva">
			<a href="home.html"><button type="button" id="button">Corrigir dados</button></a>
			<input type="hidden" name="datain" value="<?php echo $datain->format('Y-m-d');?>">
			<input type="hidden" name="datafim" value="<?php echo $datafim->format('Y-m-d');?>">
			<input type="hidden" name="valortotal" value="<?php echo $valortotal;?>">
			<input type="hidden" name="nomecli" value="<?php echo $nomecli;?>">
			<input type="hidden" name="idade" value="<?php echo $idade;?>">
			<input type="hidden" name="cpf" value="<?php echo $cpf;?>">
			<input type="hidden" name="cnh" value="<?php echo $cnh;?>">
			<input type="hidden" name="telefone" value="<?php echo $telefone;?>">
			<input type="hidden" name="numerocartao" value="<?php echo $numerocartao;?>">
			<input type="hidden" name="nomecartao" value="<?php echo $nomecartao;?>">
			<input type="hidden" name="valcartao" value="<?php echo $valcartao;?>">
			<input type="hidden" name="cvv" value="<?php echo $cvv;?>">
			<input type="hidden" name="codloja" value="<?php echo $codloja;?>">
			<input type="hidden" name="nomecidade" value="<?php echo $nomecidade;?>">
			<input type="hidden" name="codplaca" value="<?php echo $codplaca;?>">
		</form>
		</div>
		</div>
	</body>
</html>
