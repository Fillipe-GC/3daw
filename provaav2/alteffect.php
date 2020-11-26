<!DOCTYPE html>
<html>
    <head>
        <title>Adicionar Aluno</title>
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
        $matricula = $_POST['matricula'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $datanasc = $_POST['datanasc'];
        $sql = "UPDATE alunos SET nome = '$nome',cpf = '$cpf',datanasc = '$datanasc' WHERE matricula = $matricula";
        if($conn->query($sql) === TRUE){
          echo "<h2>Matricula ".$matricula." alterada para:</h2><h3>Nome: ".$nome."<br>CPF: ".$cpf."<br>Data de nascimento: ".$datanasc."<br></h3>";
        }else{
            echo "Erro na conexão com o banco de dados. ".$conn->connect_error;
        }
    }else{
        echo "Erro na alteração (método inválido).<br>";
    }
    $conn->close();
?>
        <a href="home.php"><h3>Retornar</h3></a>
    </body>
</html>
