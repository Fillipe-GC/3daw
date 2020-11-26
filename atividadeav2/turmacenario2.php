<!DOCTYPE html>
<html>
    <head>
        <title>Matrícula de aluno - Cenário 1</title>
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
	$listaalunos = [];
	$listaturmas = [];
	$listaaptos = [];
	$condicao = false;
	$i = 0;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
		$disciplina = $_POST['disciplina'];
		$turma = $_POST['turma'];
		$sql = "SELECT * FROM turmas WHERE codigo = '$turma'"; 
		$dados = $conn->query($sql);
		if($dados->num_rows>0){
			$turma = $dados->fetch_assoc();
		}
		$sql = "SELECT * FROM disciplinas WHERE sigla = '$disciplina'";
		$dados = $conn->query($sql);
		if($dados->num_rows>0){
			$disciplina = $dados->fetch_assoc();
		}
		if($turma['disciplina'] == $disciplina['codigo']){
			if($disciplina['prerequisito'] == 0){
			$sql = "SELECT * FROM alunos";
			$dados = $conn->query($sql);
			if($dados->num_rows>0){
				$listaalunos = $dados->fetch_all(MYSQLI_ASSOC);
			}
			echo "<h3>Alunos aptos:</h3><br>"; ?>
			<?php
			foreach($listaalunos as $linha){
				?> <form method="POST" action="effectcenario2.php">
				<input type="hidden" name="disciplina" value="<?php echo $disciplina['sigla'];?>">
				<input type="hidden" name="turma" value="<?php echo $turma['codigo'];?>">
				<input type="text" name="aluno" value="<?php echo $linha['nome'];?>" readonly>
				&nbsp&nbsp&nbsp <input type="submit" value="Matricular aluno"><br>
				</form>
			<?php
				}
			}
			else{
			$prereq = $disciplina['prerequisito'];
			$sql = "SELECT * FROM turmas WHERE disciplina = '$prereq'";
			$dados = $conn->query($sql);
			if($dados->num_rows>0){
				$listaturmas = $dados->fetch_all(MYSQLI_ASSOC);
				foreach($listaturmas as $linha){
					if($linha['aprovado'] == 1){
						$auxiliar = $linha['mataluno'];
						$sql = "SELECT * FROM alunos WHERE matricula = '$auxiliar'";
						$dados = $conn->query($sql);
						if($dados->num_rows>0){
							$aptos = $dados->fetch_assoc();
							$listaaptos[$i]=$aptos['nome'];
						$i=$i+1;
						}
					}
				}	
			}
			echo "<h3>Alunos aptos:</h3><br>"; ?>
			<?php
			foreach($listaaptos as $linha){
				?> <form method="POST" action="effectcenario2.php">
				<input type="hidden" name="disciplina" value="<?php echo $disciplina['sigla'];?>">
				<input type="hidden" name="turma" value="<?php echo $turma['codigo'];?>">
				<input type="text" name="aluno" value="<?php echo $linha;?>" readonly>
				&nbsp&nbsp&nbsp <input type="submit" value="Matricular aluno"><br>
				</form>
			<?php
			}
		}
		
    $conn->close();
	}
	else{
		echo "Erro: A turma escolhida não condiz com a disciplina!";
		}
	}else{
		echo "Erro na conexão com o banco de dados.";
	}	
?>

        <a href="home.php"><h3>Retornar</h3></a>
    </body>
</html>