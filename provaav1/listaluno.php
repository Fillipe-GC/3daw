<!DOCTYPE html>
<html>
    <head>
        <title>Listar Alunos</title>
        <style>
            header{
                text-align:center;
            }
            p{
                font-weight:bold;
            }
            table{
                border-collapse:collapse;
            }
            table, th, td, tr{
                border: 1px solid black;
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

            $listaalunos=[];
            $sql="SELECT * FROM alunos";
            $dados=$conn->query($sql);
            if($dados->num_rows>0){
                $listaalunos=$dados->fetch_all(MYSQLI_ASSOC);
            ?>
                <table>
                    <tr>
                        <th>Matrícula</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Data de Nascimento</th>
                    </tr>
                <?php
                    foreach($listaalunos as $aluno):?>
                    <tr>   
                        <td><?php echo $aluno['matricula'];?></td>
                        <td><?php echo $aluno['nome'];?></td>
                        <td><?php echo $aluno['cpf'];?></td>
                        <td><?php echo $aluno['datanasc'];?></td>
                    </tr>
                <?php endforeach; ?>
                </table>
                <?php
            }
            else{
                echo "Banco de dados vazio!<br>";
            }
        ?>
        <a href="home.php"><h3>Retornar</h3></a>
    </body>
</html>
