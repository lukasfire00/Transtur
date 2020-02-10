<?php 
/*Gravar os dados no banco 
-resgatar os dados do formulário
*/
//1-Resgatar os dados do formulário.
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$endereço = $_POST["endereço"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cep = $_POST["cep"];
//2-Montar o SQL para gravar os dados no banco.
$sql="insert into cliente values(null,'".$nome."','".$email."','".$senha."','".$endereço."','".$cidade."','".$estado."','".$cep."')";
//3-Abrir conexão com o banco de dados
//$con = mysqli_connect(servidor,usuario,senha,banco);
$con = mysqli_connect("localhost","root","","turismo");
//4-Gravar os dados no banco.
if(mysqli_query($con,$sql)){
echo"Produto Cadastrado com sucesso!";
}else{
    echo"Erro ao Gravar";
}
mysqli_close($con);




?>