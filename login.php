<?php 
include_once 'conexao.php';

if(isset($_POST['login']) && isset($_POST['senha'])){
    $email = $_POST['login'];
    $senha = $_POST['senha'];

    $sql = "select * from usuario WHERE login = '{$login}' AND senha = md5('{$senha}')";
    $rs = mysqli_query($con,$sql);
    $var = mysqli_num_rows($rs);

    if($var == 1){
while($quebrar = mysqli_fetch_array($rs)){
    $adm = $quebrar['adm'];
    
    
    session_start();

    if($adm == 1){
        header('location: ADM.php');
    }else{
        header('location: funcionario.php');
    }
}
    }else{
         echo "O e-mail ou senha estão incorretos!";
}
}

?>

