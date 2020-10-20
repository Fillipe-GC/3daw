<!DOCTYPE html>
<html>
    <head>
        <title>Alterar Aluno</title>
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
    $altaluno=[];
    $conn = new mysqli($server,$user,$password,$dbname);
    if($conn->connect_error){
        die("Erro de conexão.<br>".$conn->connect_error);
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $matricula = $_POST['matricula'];
        $sql = "SELECT * FROM alunos where matricula = $matricula";
        $resultado = $conn->query($sql);
        if($resultado->num_rows>0){
            $altaluno = mysqli_fetch_assoc($resultado);
            ?>
            <form method="POST" action="alteffect.php">
                <h3>Matrícula selecionada: <?php echo $altaluno['matricula'];?></h3>
                <input type="hidden" name="matricula" value="<?php echo $altaluno['matricula'];?>">
                <h4>Nome:<br><input type="text" name="nome" placeholder="<?php echo $altaluno['nome']; ?>"><br>
                CPF:<br><input type="text" name="cpf" placeholder="<?php echo $altaluno['cpf']; ?>"><br>
                Data de Nascimento:<br><input type="text" name="datanasc" placeholder="<?php echo $altaluno['datanasc']; ?>"></h4>
                <input type="submit" value="Alterar cadastro">
            </form>
        <?php
        }
        else{
            echo "Erro na alteração.<br>";
        }
    }else{
        echo "Erro (método inválido)<br>";
    }
    $conn->close();
?>
    <a href="home.php"><h3>Retornar</h3></a>
    </body>
</html>