<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#0080FF;">
        <a class="navbar-brand" href="#" style="background-color: white;">
            <img src="img/rt.png" width="100" height="100"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação" style="background-color: #0080FF">
                  <span class="navbar-toggler-icon"></span>
                </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado" style="background-color:#0080FF;">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="adm.php" style="background-color: #0080FF;" style="color: white;">Home<span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sair.php" style="background-color: #0080FF;">Sair</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #0080FF;">
                     Serviços
                      </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="turismo.php">Cadastrar Pacotes</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pedidos.php">Pedidos</a>
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
    <section class="container">
    <div class="row">
    
        <?php
                include_once 'conexao.php';
                $sql ="select * from pedido";
                $resultado = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($resultado)){


            ?>   
            <div class="col-12 col-md-4 " style="color:blue;">
               <h4 class="nome"><?php echo $row["nome"]; ?></h4>
               <h5>email:<?php echo $row["emai"]; ?></h5>
               <h5>Lugar onde deseja visitar:<?php echo $row["lugar"]; ?></h5>
               <h5>Numero de pessoas:<?php echo $row["numero"]; ?></h5>
               <h5>Hora:<?php echo $row["hora"]; ?></h5>
               <h5>Necessidade especias:<?php echo $row["necessidade"]; ?></h5>
                </div>
              <?php
              
            }  
            mysqli_close($con);

               ?>
        
   
          </div>
          </section>



    <footer id="myFooter" class="fixed-bottom">
        <div class="container">
                    </div>
                    <div class="text-center" style=background-color:yellow;>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>