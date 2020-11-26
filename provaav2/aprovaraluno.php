<!DOCTYPE html>
<html>
    <head>
        <title>Aprovar Aluno</title>
        <style>
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
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $mataluno = $_POST['aluno'];
		$codigo = $_POST['disciplina'];
        
        $sql = "SELECT * FROM disciplinas WHERE sigla = '$codigo'";
		$dados = $conn->query($sql);
		if($dados->num_rows>0){
			$disciplina = $dados->fetch_assoc();
			$codigo = $disciplina['codigo'];
		}
		else{
			echo "Disciplina não encontrada!";
		}
		$sql = "SELECT * FROM alunos WHERE nome = '$mataluno'";
		$dados = $conn->query($sql);
		if($dados->num_rows>0){
			$aluno = $dados->fetch_assoc();
			$mataluno = $aluno['matricula'];
		}
		else{
			echo "Aluno não encontrado!";
		}
		$listaturmas = [];
		$sql = "SELECT * FROM turmas WHERE disciplina = '$codigo'";
		$dados = $conn->query($sql);
		if($dados->num_rows>0){
			$listaturmas = $dados->fetch_all(MYSQLI_ASSOC);
		}
		else{
			echo "Não há turmas para esta disciplina!";
		}
		$alterou = false;
		foreach($listaturmas as $linha){
			if($linha['mataluno'] == $mataluno){
					$sql = "UPDATE turmas SET aprovado = '1' WHERE mataluno = '$mataluno'";
					if($conn->query($sql) === TRUE){
						echo "<h3>Aluno aprovado!</h3>";
					}
					$alterou = true;
			}
		}
		if(!$alterou){
			echo "<h3>O aluno não está matriculado nesta disciplina!</h3>";
		}
    }
    $conn->close();
?>

        <a href="home.php"><h3>Retornar</h3></a>
    </body>
</html>
