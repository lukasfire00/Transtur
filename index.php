<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilo/estilo.css" type="text/css">
</head>
<body style="background-color:#0080FF;">


<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#0080FF;">
        <a class="navbar-brand" href="#" style="background-color: white;">
            <img src="img/rt.png" width="100" height="100"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação" style="background-color: #0080FF">
                  <span class="navbar-toggler-icon"></span>
                </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado" style="background-color:#0080FF;">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="background-color: #0080FF;" style="color: white;">Home<span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logar.php" style="background-color: #0080FF;">Logar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #0080FF;">
                     Serviços
                      </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="turismo.php">Pacotes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Excursões</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#" style="background-color: #0080FF;">Fale conosco</a>
                </li>
            </ul>
    </div>
         
                   </div>

        </div>
    </nav>
    <div class="jumbotron">
  <h1 class="display-4"></h1>
  <p class="lead"> Rio Transtur</p>
  <hr class="my-4">
  <p>Melhor avaliação do país</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Mais informações</a>
</div>
    <section class="container">
    <div class="row">
    
        <?php
                include_once 'conexao.php';
                $sql ="select * from turismo";
                $resultado = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($resultado)){


            ?>   
            <div class="col-12 col-md-4 ">
               <h4 class="pacote"><?php echo $row["pacote"]; ?></h4>
               <h5>Valor:<?php echo $row["valor"]; ?></h5>
               <img src="upload/<?php echo $row["foto"]; ?>"class=" img-fluid">
               <p><?php echo substr($row["descricao"],0,680)."..."; ?></p>
               <P><a href="#">Saiba mais</a></p>
                </div>
              <?php
              
            }  
            mysqli_close($con);

               ?>
        
   
          </div>
          </section>
   
          <?php
          include_once "carrosel.php"?>
<footer id="myFooter">
                <div class="container">
                    
                </div>
                <div class="text-center" style=background-color:yellow;>
                    <a href="https://pt-br.facebook.com/" class="social-icons"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.youtube.com/?hl=pt&gl=BR" class="social-icons"><i class="fa fa-youtube"></i></a>
                    <a href="https://twitter.com/login?lang=pt" class="social-icons"><i class="fa fa-twitter"></i></a>
                </div>
            </footer>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>