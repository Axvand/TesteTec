
<?php 
    session_start();
 include 'conexao.php';

//Tratando o input

if(isset($_POST['submit']) && isset($_FILES['video'])){ //verificação do arquivo do formulário

    // informações do form
    $title = $_POST["titulo"];
    $description = $_POST["descricao"];

    // caracteristicas e infos do video 
    $video = $_FILES['video'];
    $_SESSION['video_name'] = $_FILES['video']['name'];
    $video_tmp = $_FILES['video']['tmp_name'];
    $error = $_FILES['video']['error'];

    if($error == 0 ){ //verificando se não houve erro;

        $video_ex = pathinfo($_SESSION['video_name'], PATHINFO_EXTENSION); //tipo do arquivo.
       
        $video_ex_lc = strtolower($video_ex); //deixando o tipo do arquivo em minusculo ex: ".mp4"

        $allowed_exs = array("mp4", "webm","avi",'flv','png','jpeg', 'jpg'); //"Array de formatos permitidos"

        if(in_array($video_ex_lc, $allowed_exs)){  //checagem: se o formato do video upado no fomulário está contido no array dos formatos permitidos

            $new_video_name = uniqid("video-", true). '.'.$video_ex_lc; //Gerando um id unico para o nome do arquivo.


            $video_upload_pach = 'uploads/'.$new_video_name; // pasta destino que o arquivo de video vai ser armazenado com o novo nome concatenado;


            move_uploaded_file( $video_tmp, $video_upload_pach ); //A ação efetiva de tirar o arquivo que está nesse momento upado no formulário ($video_tmp que é elemento do $_File[]['video_tmp']), e jogar pra pasta que está na raiz do projeto


            //envio do caminho para o dados para o banco;

            //comando SQL

            $sqlInsert = "INSERT INTO videoseimgs (`titulo`, `descricao`, `video`) VALUES ('$title','$description','$video_upload_pach')";

            //conexão com o banco de dados!

            if(mysqli_query($connect_data, $sqlInsert)){ //conexão
                echo "Upload Completo";
                header('Location: /TesteTecnico/index2.php'); //encaminhamento para a pagina de exibição
                
            }else
                echo '...';

        }else{
            echo "you can't upload files of this type"; // quando o arquivo não tiver na lista de permitidos!
        };
    }else{
        echo "sem video, sem papo!"; // quando o arquivo não tiver video
    };
}else{
};

?>
