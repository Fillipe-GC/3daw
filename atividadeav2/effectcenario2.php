<!DOCTYPE html>
<html>
    <head>
        <title>Matrícula de aluno - Cenário 2</title>
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
		$nomealuno = $_POST['aluno'];	
		$disciplina = $_POST['disciplina']; 
		$turma = $_POST['turma'];
		$sql = "SELECT * FROM alunos WHERE nome = '$nomealuno'"; 
		$dados = $conn->query($sql);
		if($dados->num_rows>0){
			$nomealuno = $dados->fetch_assoc();
			$aluno = $nomealuno['matricula']; 
		}
		$sql = "SELECT * FROM disciplinas WHERE sigla = '$disciplina'";
		$dados = $conn->query($sql);
		if($dados->num_rows>0){
			$disciplina = $dados->fetch_assoc();
			$coddis = $disciplina['codigo'];
		}
		$sql = "SELECT * FROM turmas WHERE codigo = '$turma'";
		$dados = $conn->query($sql);
		if($dados->num_rows>0){
			$turma = $dados->fetch_assoc();
			$codigo = $turma['codigo'];
			$sala = $turma['sala'];
			$turno = $turma['turno'];
			$professor = $turma['professor'];
		}
        $sql = "INSERT INTO turmas (aprovado, codigo, disciplina, mataluno, professor, sala, turno) VALUES ('0','$codigo','$coddis','$aluno','$professor','$sala','$turno')";
        if($conn->query($sql) === TRUE){
          echo "<h2>Aluno matriculado com sucesso! </h2>";
        }else{
            echo "Erro na conexão com o banco de dados. ".$conn->connect_error;
        }
    }
    else{
        echo "Erro na inserção (método inválido)<br>";
    }
    $conn->close();
?>

        <a href="home.php"><h3>Retornar</h3></a>
    </body>
</html>