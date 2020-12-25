<?php
	require 'conexao.php';
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$nomecli = $_POST['nomecli'];
		$idade = $_POST['idade'];
		$cpf = $_POST['cpf'];
		$cnh = $_POST['cnh'];
		$telefone = $_POST['telefone'];
		$numerocartao = $_POST['numerocartao'];
		$nomecartao = $_POST['nomecartao'];
		$valcartao = $_POST['valcartao'];
		$cvv = $_POST['cvv'];
		$nomecidade = $_POST['nomecidade'];
		$codplaca = $_POST['codplaca'];
		$codloja = $_POST['codloja'];
		$valortotal = $_POST['valortotal'];
		$datain = $_POST['datain'];
		$datafim = $_POST['datafim'];
		
		$checarcadastro = 0;
		
		$sql = "INSERT INTO clientes (nome, idade, cpf, cnh, telefone, numerocartao, nomecartao, valcartao, cvv) VALUES ('$nomecli', '$idade', '$cpf', '$cnh', '$telefone', '$numerocartao', '$nomecartao', '$valcartao', '$cvv')";
		if($conn->query($sql) === FALSE){
			echo "Erro na conexão com o banco de dados";
			$checarcadastro = $checarcadastro+1;
		}
		
		$sql = "INSERT INTO reservas (codloja, nomecidade, codplaca, nomecli, datain, datafim, valtotal) VALUES ('$codloja', '$nomecidade', '$codplaca', '$nomecli', '$datain', '$datafim', '$valortotal')";
		if($conn->query($sql) === FALSE){
			echo "Erro na conexão com o banco de dados";
			$checarcadastro = $checarcadastro+1;
		}
		
		$sql = "UPDATE carros SET reservado = '1' WHERE codplaca = '$codplaca'";
		if($conn->query($sql) === FALSE){
			echo "Erro na conexão com o banco de dados";
			$checarcadastro = $checarcadastro+1;
		}
		
		if($checarcadastro == 0){
			echo "Reserva efetuada com sucesso!";
	}else{
		echo "Erro: Método inválido.";
	}
	}
	$conn->close();
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>XPTOTEC - Aluguel de Carros</title>
	</head>
	<body>
		<a href="home.html"><h3>Retornar<h3></a>
	</body>
</html>
