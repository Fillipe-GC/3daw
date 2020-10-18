<!DOCTYPE html>
<html>
	<body>
		<?php
			$texto = "Meu texto em php<br>";
			print $texto;
	
			$inteiro = 12345;
			echo $inteiro."<br>";
			var_dump($inteiro);
	
			$texto = "<br>";
			print $texto;
	
			$decimal = 3.14;
			echo $decimal."<br>";
			var_dump($decimal);
	
			$booleano = true;
			echo "<br>".$booleano;
	
			$alunos = array("Fillipe","Lucas","Andressa","Davi");
			echo "<br>".$alunos[0]."<br>";
			var_dump($alunos);
		?>
	</body>
</html> 