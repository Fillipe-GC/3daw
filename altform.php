<!DOCTYPE html>
<html>
    <head>
        <title>Alterar Cadastro</title>
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
            3DAW Manhã - Trabalho AV2<br>
            Aluno: Fillipe Gonçalves de Carvalho<br></p> 
        </header>
        <h2>Alterar Cadastro:</h2>
        <form method="POST" action="altaluno.php">
            Digite a matrícula a ser alterada:<br><input type="text" name="matricula"><br><br>
            <input type="submit" value="Enviar"><br>
        </form>
        <a href="home.php"><h3>Retornar</h3></a>
    </body>
</html>