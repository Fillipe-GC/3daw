<?php
	require 'conexao.php';
	$opcaocidade = $_GET['opcaocidade'];
	$sql="SELECT * FROM lojas WHERE nomecidade = '$opcaocidade'";
	$resultado = $conn->query($sql);

	if($resultado->num_rows > 0){
		$recebedor = $resultado->fetch_all(MYSQLI_ASSOC);
		$lista = json_encode($recebedor);
		echo $lista;
	}
	$conn->close();
?>
