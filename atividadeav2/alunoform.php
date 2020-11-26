<!DOCTYPE html>
<html>
    <head>
        <title>Adicionar Aluno</title>
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
        <h2>Adicionar aluno:</h2>
        <form method="POST" action="addaluno.php">
            Matrícula (10 dígitos)<br><input type="text" name="matricula"><br>
            Nome (100 caracteres):<br><input type="text" name="nome"><br>
            CPF (11 digitos):<br><input type="text" name="cpf"><br>
            Data de nascimento (formato ano-mes-dia):<br><input type="text" name="datanasc"><br><br>
            <input type="submit" value="Adicionar"><br>
        </form>
        <a href="home.php"><h3>Retornar</h3></a>
    </body>
</html>