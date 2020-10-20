<?php
	session_start();
?>
<html>
<body>
<?php	
	echo "Seu nome é " . $_SESSION["nome"];
	if($_SESSION["nome"]=="Antonio"){
		echo "<br>O seu faturamento de vendas é ".rand(0,50000);
	}
?>	
</body>
</html>