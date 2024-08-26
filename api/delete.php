<?php 

include 'conexao.php'; // conexao importada

$fileId = $_POST['fileId'] ; // Dados do formulário button

$codigoSql= "DELETE FROM `videoseimgs` WHERE `id_video` = $fileId"; //comando sql

if(mysqli_query($connect_data, $codigoSql)){ 
    header('Location: /TesteTecnico/index2.php'); //Após a chama encaminhamento para a pagina de exibição;
}
?>