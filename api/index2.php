<!DOCTYPE html>

<?php
  include "upload.php"
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Document</title>
</head>

<body>
    <nav class="nav">
        <div class="logoConteiner"> <img src="./Logo.png" height="60px" alt=""></div>
        <a href="./index.php">Voltar</a>
    </nav>


    <?php
  

//GET 

$sqlSelect = "SELECT * FROM videoseimgs WHERE 1"; //comando sql

$dados = mysqli_query($connect_data, $sqlSelect); // conexão com o banco e resultado direcionado a variavel
?>
    <main class="main">
        <h2 class="tituloApresentacao">Veja aqui seu arquivo:</h2>

        <div class="cardsConteiner">

<?php 
            // $linhas = mysqli_fetch_assoc($dados);

           
        
        $type =  pathinfo($_SESSION['video_name'], PATHINFO_EXTENSION); //tipo do arquivo upado na pasta raiz. A superglobal $_session possibilita pegar essa variavel.

         //printando o arquivo no card

        foreach($dados as $dado){
                $returnVideoImage;
                $id_videoImg = $dado['id_video'];
                $videoImg = $dado['video'];
                $titulo = $dado['titulo'];
                $descricao= $dado['descricao'];

                echo "    
                <br>
                <div class='card' > 
                <video class='video'  style='border-radius: 10px; display:block;' controls width='100%'> 
                <source class='video1' src='$videoImg' type='video/mp4'>
                <source class='video1' src='$videoImg' type='video/webm'>
                </video>
                <img class='imgCard' src='$videoImg'/>
                <h2 class='tituloArquivo TituloFile'>$id_videoImg $titulo</h2>
                <p class='tituloArquivo descricaoTitleFile'> descrição:</p>
                <p class='descricaoText tituloArquivo'>$descricao</p>
                
                <form method='post' action='delete.php'>
                <input type='submit' class='buttonDelete'  value ='Delete' name='buttondelete'>
                <input  style='display: none;' type='text' name='fileId' value='$id_videoImg'>
                </form>
               
                </div>
                
                ";
                };

?>
        </div>
            </main>
</body>

</html>