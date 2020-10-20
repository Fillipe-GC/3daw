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
            3DAW Manhã - Prova AV1<br>
            Aluno: Fillipe Gonçalves de Carvalho<br></p> 
        </header>
<?php
    $server = 'localhost';
    $user = 'fillipe';
    $password = '';
    $dbname = "3dawav1";
    $conn = new mysqli($server,$user,$password,$dbname);
    if($conn->connect_error){
        die("Erro de conexão.<br>".$conn->connect_error);
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $cpf = $_POST['cpf'];
        $datanasc = $_POST['datanasc'];
        $sql = "INSERT INTO alunos (matricula, nome, cpf, datanasc) VALUES ('$matricula','$nome','$cpf','$datanasc')";
        if($conn->query($sql) === TRUE){
          echo "<h2>Registro inserido:</h2><h3>Matricula: ".$matricula."<br>Nome: ".$nome."<br>CPF: ".$cpf."<br>Data de nascimento: ".$datanasc."<br></h3>";
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
