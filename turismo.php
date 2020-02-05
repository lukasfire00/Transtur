<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body style="background-color: #0080FF;">
              <?php include_once 'menu.php'?>

        <div id="conteudo1">
            <!--o formulario precisa ser habilitado a enviar arquivos enctyp="multipart/form-data", habiliya o forma a enviar arquivo -->
       <form action="gravarartigo.php" method="post" enctype="multipart/form-data"> 
        Pacote:<br>
            <input type="text" name="pacote" required="required"/>
            <br><br>
            Valor:<br>
            <input type="text" name="valor" required="required"/>
            <br><br>
            Descrição do Pacote:<br>
            <textarea name="descricao"> </textarea>
            <br><br>
            Foto:<br>
            <input type="file" name="foto" required="required"/><br>
            <br>
            <input type="submit" value="Cadastrar"/>
        </form>


        <!--<form onsubmit="return valida" name=form>

<label for="inputZip">Pacote:</label>
<input type="text" class="form-control" name="pacote" required="required">

<label for="inputZip">Valor:</label>
<input type="text" class="form-control" name="valor" required="required">

<label for="inputZip">Descrição do Pacote:</label>
<textarea class="form-control" rows="3" name="descricao"></textarea><br>

<label for="inputZip">Foto:</label>
<input type="file" class="form-control" name="foto" required="required">


<button type="button" value="Cadastrar" onclick="valida()" class="btn btn-outline-info"></button>
</form>-->



        </div>
        <footer id="myFooter" style="align-content: center";>
        <div class="container">
            <p class="footer-copyright"> © 2019 RioTransTur</p>
        </div>
        <div class="footer-social" style="background-color: yellow;">
            <a href="#" class="social-icons">
                <i class="fa fa-facebook"></i></a>
            <a href="#" class="social-icons">
                <i class="fa fa-youtube"></i></a>
            <a href="#" class="social-icons">
                <i class="fa fa-twitter"></i></a>
        </div>

    </footer>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>