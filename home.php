<?php
    $server = 'localhost';
    $user = 'fillipe';
    $password = '';
    $dbname = "3dawav1";
    $conn = new mysqli($server,$user,$password,$dbname);
    if($conn->connect_error){
        die("Erro de conexão.<br>".$conn->connect_error);
    }
    else{
        $sql="SELECT * FROM alunos";
        $dados=$conn->query($sql);
    }
?>
<!DOCTYPE html>
    <head>
        <title>3DAW - Prova AV1 - Fillipe Gonçalves</title>
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
            3DAW Manhã - Prova AV1<br>
            Aluno: Fillipe Gonçalves de Carvalho<br></p> 
        </header>
        <h2>Bem vindo!</h2>
        <h3>Seu banco de dados possui <?php echo $dados->num_rows; ?> registros.</h3>
        <h3>Escolha uma opção:</h3>
        <a href="addform.php">Adicionar novo aluno</a><br>
        <a href="listaluno.php">Listar alunos</a><br>
        <a href="altform.php">Alterar cadastro</a><br>
        <a href="delform.php">Remover aluno</a><br> 
    </body>
</html>