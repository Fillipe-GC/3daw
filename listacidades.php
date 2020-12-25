<?php
	require 'conexao.php';
	$sql="SELECT * FROM cidades";
	$resultado = $conn->query($sql);

	if($resultado->num_rows > 0){
		$recebedor = $resultado->fetch_all(MYSQLI_ASSOC);
		$lista = json_encode($recebedor);
		echo $lista;
	}
	$conn->close();
?>