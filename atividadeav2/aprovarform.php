<!DOCTYPE html>
<html>
    <head>
        <title>Alterar situação do aluno</title>
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
	$sql = "SELECT * FROM alunos";
	$dados = $conn->query($sql);
	if($dados->num_rows>0){
		$listaalunos = $dados->fetch_all(MYSQLI_ASSOC);
	}
	$sql = "SELECT * FROM disciplinas";
	$dados = $conn->query($sql);
	if($dados->num_rows>0){
		$listadisciplinas = $dados->fetch_all(MYSQLI_ASSOC);
	}
	
	?>
        <h2>Alterar situação do aluno</h2>
        <form method="POST" action="aprovaraluno.php">
            <br>
			<label for="disciplina">Escolha a disciplina: </label>
			<select name="disciplina" id="disciplina">
				<?php
					foreach($listadisciplinas as $disciplina): ?>
					<option value="<?php echo $disciplina['sigla']?>"><?php echo $disciplina['sigla']; ?></option>
					<?php endforeach; ?>
			</select><br>
			<label for="aluno">Escolha o aluno: </label>
			<select name="aluno" id="aluno">
				<?php
					foreach($listaalunos as $aluno):?>
					<option value="<?php echo $aluno['nome']?>"><?php echo $aluno['nome']; ?></option>
					<?php endforeach; ?>
			</select><br><br>
            <input type="submit" value="Aprovar aluno nesta disciplina"><br>
        </form>
        <a href="home.php"><h3>Retornar</h3></a>
    </body>
</html>