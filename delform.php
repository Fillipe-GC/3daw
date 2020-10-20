<!DOCTYPE html>
<html>
    <head>
        <title>Excluir Aluno</title>
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
        <h2>Excluir Registro:</h2>
        <form method="POST" action="delaluno.php">
            <h3>Digite a matrícula a ser excluída:<br><input type="text" name="matricula"><br><br>
            <input type="submit" value="Excluir registro">
        </form>
        <a href="home.php"><h3>Retornar</h3></a>
    </body>
</html>