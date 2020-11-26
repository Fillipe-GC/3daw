<!DOCTYPE html>
<html>
    <head>
        <title>Criar Turma</title>
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
        <h2>Criar Turma:</h2>
        <form method="POST" action="addturma.php">
			Código da turma (7 dígitos):<br><input type="text" name="idturma"><br>
            Sigla da disciplina (4 caracteres):<br><input type="text" name="codigo"><br>
            Código da disciplina (3 dígitos):<br><input type="text" name="disciplina"><br>
            Nome do professor (50 caracteres):<br><input type="text" name="professor"><br>
            Número da sala (1 dígito):<br><input type="text" name="sala"><br>
			Turno (Manhã/Noite):<br><input type="text" name="turno"><br><br>
            <input type="submit" value="Criar turma"><br>
        </form>
        <a href="home.php"><h3>Retornar</h3></a>
    </body>
</html>
