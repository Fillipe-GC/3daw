<?php
	session_start();
?>
<html>
<body>
	<form action="ex6session1.php" method="POST">
		Nome de usuário: <input type="text" name="nome"><br>
		Senha: <input type="password" name="senha"><br>
		<input type="submit">
	</form>
	<?php	
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$usuario = $_POST["nome"];
			$senha = $_POST["senha"];
			echo "Olá " . $usuario;
			$_SESSION["nome"] = $usuario;
		}
	?>
</body>
</html>
