<!DOCTYPE html>
    <head>
        <title>3DAW - Trabalho AV2 - Fillipe Gonçalves</title>
        <style>
            h2{
                color:navy;
            }
            header{
                text-align:center;
            }
            p{
                font-weight:bold;
            }
        </style>
    </head>
    <body>
        <header>
            <p>Faculdade de Educação Tecnológica do Estado do Rio de Janeiro<br>
            3DAW Manhã - Trabalho AV2<br>
            Aluno: Fillipe Gonçalves de Carvalho<br></p> 
        </header>
	<?php
		$server = 'localhost';
		$user = 'fillipe';
		$password = '';
		$dbname = "3dawav2";
		$conn = new mysqli($server,$user,$password,$dbname);
			if($conn->connect_error){
				die("Erro de conexão.<br>".$conn->connect_error);
			}
		$conn->close();
	?>
        <h2>Bem vindo!</h2>
        <h3>Escolha uma opção:</h3>
		<a href="alunoform.php">Adicionar novo aluno</a><br>
		<a href="altform.php">Alterar cadastro de aluno</a><br>
		<a href="delform.php">Remover cadastro de aluno</a><br>
        <a href="disciplinaform.php">Adicionar nova disciplina</a><br>
		<a href="formturma.php">Criar nova turma</a><br>
        <a href="formmatricula.php">Matricular um aluno (Cenário 1)</a><br>
		<a href="aprovarform.php">Alterar situação do aluno</a><br>
		<a href="formmatricula2.php">Matricular um aluno (Cenário 2)</a><br>
    </body>
</html>