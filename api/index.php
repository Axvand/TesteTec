<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>TestTecnico</title>
</head>
<body>
     <nav class="nav">
        <div class="logoConteiner"> <img src="./Logo.png" height="60px" alt=""></div>
        <a href="./index2.php">Voltar</a>
    </nav>
    <header class="header">
        <form action="upload.php" method="Post" class="form" enctype="multipart/form-data">
             <h2 class="titleHeader">Faça Upload Do Seu Arquivo</h2>  

            <div class="secForm">
                <label for="title">Titulo</label><br>
                <input class="input" maxlength="20" minlength="3" type="text" name='titulo'>
            </div>

             <div class="secForm">
                <label for="descricao">Descrição</label><br>
                <textarea class="descricao" maxlength="40" minlength="3" type="text" name="descricao"></textarea>
            </div>  
            <br>
            <div class="secform secformFile"><br>
                <input type="file" class="inputFile" accept="video/* img/*" name="video" id="myFile">
            </div>
            <br>
            <input class="button" type="submit" name="submit" value="Send">
        </form>
    </header>
</body> 
</html>