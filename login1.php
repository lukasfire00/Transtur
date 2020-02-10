<?php
//abrir a sessao
session_start();
$email = $_POST["email"];
$senha = $_POST["senha"];
//montar a instrução de verificar se o usuario existe
$sql = "select * from cliente WHERE email ='".$email."' AND senha = '".$senha."'";
//abrir conexão com o banco
include_once 'conexao.php';
//executar a intrução no banco
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs) == 1){

      //echo"Encontrei!....";
        echo"<script>";    
        echo"location.href='faça.php'";
        echo"</script>";
}else{
      echo"Nenhum registro encontrado";
}
// fechar conexão com o banco
mysqli_close($con);   


?>