<!DOCTYPE html>
<html>
	<body>
	<?php
		$texto = "Meu texto em php";
		echo $texto;
		$idade = 25;
		$idade2 = 33;
		echo "<br>".strlen($texto);
		echo "<br>".str_word_count($texto);
//		strrev();   //reverte sentido
//		strpos();	//procura um texto
//		str_replace(); // troca caracteres
		echo "<br>".strrev($texto);
		echo "<br>".strpos($texto, "eu");
		echo "<br>".str_replace("Meu", "Seu", $texto)."<br>"; 
	
		$txt1 = (string)$idade;
		var_dump($txt1);
		echo "<br>";
		var_dump($idade);
		echo "<br>".$texto . " ".$idade;
		echo "<br>minha idade é " . $idade2."<br>";
		$x = "12" + $idade;
		echo $x;
	?>
	</body>
</html> 