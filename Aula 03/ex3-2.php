<!DOCTYPE html>
<html>
	<body>
		<?php
			class Aluno {
			public $nome;
			public $idade;
		
			function Aluno() {
				$this->nome = "Fillipe";
				$this->idade = 26;
			}
			function get_nome() {
				return $this->nome;
			}
			function get_idade() {
				return $this->idade;
			}
			}	
			$aluno1 = new Aluno();
			echo $aluno1->get_nome()."<br>".$aluno1->get_idade();
		?>
	</body>
</html> 
