<?php 
/*Gravar os dados no banco 
-resgatar os dados do formulário
*/
//1-Resgatar os dados do formulário.
$nome = $_POST["nome"];
$email = $_POST["email"];
$lugar = $_POST["lugar"];
$numero = $_POST["numero"];
$hora = $_POST["hora"];
$necessidade = $_POST["necessidade"];
//2-Montar o SQL para gravar os dados no banco.
$sql="insert into pedido values(null,'".$nome."','".$email."','".$lugar."','".$numero."','".$hora."','".$necessidade."')";
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