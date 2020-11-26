<!DOCTYPE html>
<html>
    <head>
        <title>Adicionar Disciplina</title>
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
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $periodo = $_POST['periodo'];
        $prerequisito = $_POST['prerequisito'];
		$sigla = $_POST['sigla'];
        $sql = "INSERT INTO disciplinas (codigo, nome, periodo, prerequisito, sigla) VALUES ('$codigo', '$nome', '$periodo', '$prerequisito', '$sigla')";
        if($conn->query($sql) === TRUE){
		  $sql = "SELECT * FROM disciplinas WHERE codigo = $prerequisito";
		  $dados = $conn->query($sql);
		  if($dados->num_rows>0){
			  $prereq=$dados->fetch_assoc();
		  }
          echo "<h2>Disciplina criada:</h2><h3>Código: ".$codigo."<br>Nome: ".$nome."<br>Período: ".$periodo."<br>Pré-requisito: Código ".$prerequisito." - ";
		  if($prerequisito==0){
			  echo "Sem pré-requisito";
		  }else{
		  echo $prereq['nome'];}
		  echo "<br>Sigla: ".$sigla."<br></h3>";
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
