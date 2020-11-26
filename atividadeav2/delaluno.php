<!DOCTYPE html>
<html>
    <head>
        <title>Excluir Aluno</title>
        <style>
        header{
            text-align:center;
        }
        p{
            font-weight:bold;
        }
        h2{
            color:navy;
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
    $alunoexcluido = [];
    $conn = new mysqli($server,$user,$password,$dbname);
    if($conn->connect_error){
        die("Erro de conexão.<br>".$conn->connection_error);
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $matricula = $_POST['matricula'];
        $sql = "SELECT * FROM alunos where matricula = $matricula";
        $resultado = $conn->query($sql);
        if($resultado->num_rows>0){
            $alunoexcluido = $resultado->fetch_assoc();
            echo "<h2>Aluno selecionado:</h2><h3>Matrícula: ".$alunoexcluido['matricula']."<br>Nome: ".$alunoexcluido['nome']."<br>CPF: ".$alunoexcluido['cpf']."<br>Data de Nascimento: ".$alunoexcluido['datanasc']."<br></h3>";
            $sql="DELETE FROM alunos WHERE matricula = $matricula"; 
            if($conn->query($sql) === TRUE){
                echo "Registro excluído com sucesso.<br>";
            }else{
                echo "Erro na conexão com o banco de dados. ".$conn->connect_error;
            }
        }else{
            echo "Erro na remoção.";
        }
    }else{
        echo "Erro na remoção (método inválido)<br>";
    }
    $conn->close();
?>
        <a href="home.php"><h3>Retornar</h3></a>
    </body>
</html>