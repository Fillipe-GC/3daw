<html>
<body>
	<?php
		$nome = $_POST["nome"];
		$idade = $_POST["idade"];
		$email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
		$senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$formValido = 0;
	
		if(valida_texto($nome) && valida_inteiro($idade) && $email && valida_senha($senha)){
			$validaForm = 1;
		}else{
			$validaForm = 0;
		}
		
		if(!$email){
			echo "Email inválido<br>";
		}
		
		if ($validaForm == 1){
			echo "Olá ".$nome."<br>";
			echo "Sua idade é ".$idade."<br>";
		}else{
			echo "Há um erro no formulário, preencha os campos corretamente.";
		}
	
		function valida_texto($texto) {
			if ($texto != "" && ctype_alpha($texto)) {
				return true;
			}
			echo "Nome inválido<br>";
			return false;
		}
		
		function valida_inteiro($inteiro) {
			if ($inteiro != "" && ctype_digit($inteiro) && $inteiro>18)  {
				return true;
			} 
			echo "Idade inválida<br>";
			return false;
		}
		
		
		function valida_senha($senha) {
			if (!ctype_alnum($senha) 
					or strlen($senha) < 8) {
				echo "Senha inválida<br>";
				return false;
			}
			return true;
		}
	?>
	</body>
</html>