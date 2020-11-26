<!DOCTYPE html>
<html>
    <head>
        <title>Criar Turma</title>
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
        $codigo = $_POST['idturma'];
        $disciplina = $_POST['disciplina'];
        $professor = $_POST['professor'];
        $sala = $_POST['sala'];
		$turno = $_POST['turno'];
        $sql = "INSERT INTO turmas (aprovado, codigo, disciplina, mataluno, professor, sala, turno) VALUES ('0','$codigo','$disciplina','0','$professor','$sala','$turno')";
        if($conn->query($sql) === TRUE){
          echo "<h2>Nova turma criada: </h2><h3>Disciplina: ".$disciplina."<br>Código da turma: ".$codigo."<br>Professor: ".$professor."<br>Sala: ".$sala."<br>Turno: ".$turno."</h3>";
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