<?php 
$server ='localhost';
$user = 'root';
$password = 'secret';
$bancoNome = 'testeTec';

if($connect_data = mysqli_connect($server, $user, $password, $bancoNome)){
    echo '';
}else{
    echo 'bad request';
};
?>