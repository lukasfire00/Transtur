<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php 
      // pegar os dados da tela
      $pacote = $_POST["pacote"];
      $valor = $_POST["valor"]; 
      $descricao = $_POST["descricao"];
      $foto = $_FILES["foto"];
           
      /* echo var_dump($foto);
     array(5) { ["name"]=> string(12) "image001.jpg" 
        ["type"]=> string(10) "image/jpeg" 
        ["tmp_name"]=> string(24) "C:\xampp\tmp\php6137.tmp" 
        ["error"]=> int(0) ["size"]=> 
        int(102891) }
      */
 // tratamento no arquivo
 // verificar a extensão do arquivo

 $ext = explode(".",$foto["name"]); //[nome][ext]
 $ext = array_reverse($ext); //[jpg][image001]
 $ext = $ext[0]; // jpg
 
 if($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif"){
     echo"Arquivo Invalido!";
 }elseif($foto["size"] > 1024 * 800){
     echo"Tamanho excedido!";
 }else{
          // gravar no banco ... fazer a logica de gravar.
     include_once 'conexao.php';

     $nomefoto = date("YmdHis").rand(0000,9999).".".$ext;
     //$sql = "insert into games (idgame, titulo, estudio, descricao, foto) values (null, '$titulo', '$estudio', '$descricao', '$foto')";
     $sql="insert into turismo values
     (null,'".$pacote."','".$valor."','".$descricao."','".$nomefoto."')";
         
     if(mysqli_query($con,$sql)){
         echo"Gravado com Sucesso!....";
         //mover o arquivo de foto para a pasta
         move_uploaded_file($foto["tmp_name"],"upload/".$nomefoto);
     }else{
         echo"Erro ao gravar";
     }
     mysqli_close($con);

 }
 
 ?>

</body>
</html>