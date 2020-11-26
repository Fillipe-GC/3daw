<!DOCTYPE html>
<html>
    <head>
        <title>Adicionar Disciplina</title>
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
        <h2>Adicionar disciplina:</h2>
        <form method="POST" action="adddisciplina.php">
            Código da disciplina (3 dígitos / exemplo: 001)<br><input type="text" name="codigo"><br>
            Nome (50 caracteres):<br><input type="text" name="nome"><br>
            Período (1 dígito):<br><input type="text" name="periodo"><br>
            Pré-Requisito (Código de 3 dígitos da disciplina / 0 para sem pré-requisito):<br><input type="text" name="prerequisito"><br>
			Sigla (4 caracteres / exemplo: 3DAW):<br><input type="text" name="sigla"><br><br>
            <input type="submit" value="Adicionar"><br>
        </form>
        <a href="home.php"><h3>Retornar</h3></a>
    </body>
</html>
