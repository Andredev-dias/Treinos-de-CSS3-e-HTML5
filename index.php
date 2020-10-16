<!DOCTYPE html>
<?php
session_start();
require_once 'functions/funIndex.php';
$avatar = $_SESSION['avatar'];
?>

<html>

<head>
  <meta charset="utf-8" />
  <title>Glooves</title>
  <link href="css/index.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://use.fontawesome.com/243239556e.js"></script>


</head>

<body>
  <style>
    .box {
      width: auto;
      height: auto;
      background: #fff;
      background-color: rgba(255, 255, 255, 0.8);
    }

    .card {
      margin-top: 3%;
      margin-right: 1%;
      margin-left: 4%;
      margin-bottom: 2%;
      background-color: rgba(255, 255, 255, 0.9);

    }

    p {
      font-size: 25px;

    }

    .btn {
      display: inline-block;
      font-weight: 400;
      color: #ffffff;
      text-align: center;
      vertical-align: middle;
      background-color: #303644;
      border: 0px solid transparent;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: 0rem;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn:hover {
      background: #f06d01;
      text-decoration: none;
      color: rgba(255, 255, 255);
    }

   

    .logado {
      border-radius: 50%;
      border: 4px solid #f06d01;
      box-shadow: 3px 3px 30px 1px #262626;
      cursor:pointer;
      z-index: 999;
      max-width: 60px;
      max-height: 60px;
      
      
    }
    .top{
      
      width: 900px;
      
    }

    i {
      margin-left: 1%;
    }

    .espaco-menu {
      margin-right: 1%;
    }

    .container {
      margin-top: 7%;
    }

    .navbar {
      border-bottom: 10px solid #262626;
      padding-left: 15%;
      padding-right: 8%;
    }

    h2 {
      text-align: left;
      color: #262626;
      margin-left: 5%;
    }

    ul {
      margin-left: 20%;
      margin-right: 20%;
      margin: 0;
      padding: 0;
      display: flex;
    }

    ul li {
      list-style: none;
      margin: 05px;
    }

    ul li a {
      position: relative;
      display: flex;
      justify-content: center;
      align-content: center;
      width: 60%;
      height: 60%;
      border-radius: 50%;
      font-size: 30px;
      color: rgba(12, 5, 2, 0.726);
      transition: 0.5s;
    }

    footer {
      border-top: 10px solid #262626;
      background: rgba(255, 255, 255, 0.726);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 20vh;
    }

    a {
     
      color: #262626;

    }

    a:hover {
      text-decoration: none;
      color: #f06d01
    }
    .tam{
      margin-left: 100px;
      width:200px;
      height:120px;
    }
    @media screen and (max-width: 576px) {
      .logado {
      border-radius: 50%;
      border: 4px solid #f06d01;
      box-shadow: 3px 3px 30px 1px #262626;
      cursor:pointer;
      z-index: 999;
      max-width: 80px;
      max-height: 80px;
      margin-right: 10%;
      margin-top:25px;
      
      
    }
    .top{
      
      width: auto;
      
    }
  
    .tam{
      margin-left: 0;
      width:80px;
      height:50px;

    }
    .navbar {
    
      padding-left: 2rem;
    }
    footer{
      padding-left: 13px;
      padding-right: 13px;
    }
      

    }

    @media only screen and (device-width: 768px) {
      .logado {
      border-radius: 50%;
      border: 4px solid #f06d01;
      box-shadow: 3px 3px 30px 1px #262626;
      cursor:pointer;
      z-index: 999;
      max-width: 100px;
      max-height: 100px;
      
      
    }
    .top{
      
      width: auto;
      
    }
  
    .tam{
      margin-left: 0;
      width:80px;
      height:50px;

    }
    .navbar {
    
      padding-left: 2rem;
    }
    .card {
      padding: 5px;
      margin-top: 3%;
      margin-right: 2%;
      margin-left: 14%;
      margin-bottom: 2%;
      background-color: rgba(255, 255, 255, 0.9);
      

    }
      
    }
  </style>

  <!--Navbar-->
 
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-nav outra">
    <img  class="tam" href="index.php" src="img/logo-ajustada.png" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">

        <div class="top">
  <div class="col-sm-12 col-sx-12">
          <a href="perfil.php?acao=carregar&id="><img href="perfil.php" title="Visitar Perfil."  class="logado" src="img/gatinha.jpg" /></a>
  
          <i class="fa fa-sign-out" aria-hidden="true"></i><a href="login.php" class="espaco-menu">Logout</a>

          <a href="login.php" class="btn btn-secondary">Login</a>

          <a href="cadastroUser.php" class="btn btn-secondary">Cadastre-se</a>
          </div>
        </div>
  </div>
      </div>
    </div>
  </nav>
 
<!--Carrossel-->

  <div class="container">
    <div class="box">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/anuncio1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/anuncio2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/anuncio3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <br>
      <img src="img/title.png" width="100%">

      <!--Cards-->
      <div class="row" style="padding-left:8%;">
      <?php
        $produtos = listarProduto();
          foreach ($produtos as $produto) {
          $nome = $produto['nome'];
          $valor = $produto['valor'];
          $url = $produto['url'];
          ?>
        <div class="card col-sm-3 " style="width: 18rem; ">
          <img src="<?= $url?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $nome?></h5>
            <p class="card-text">R$<?= $valor?></p>
          </div>
          <div class="card-body">
            <button title="Adicionar ao Carrinho" type="button" class="btn btn-secondary"><i class="fa fa-cart-plus"
                aria-hidden="true"></i></button>

            <button title="Detalhes do Produto" type="button" class="btn btn-warning"><i class="fa fa-info-circle"
                aria-hidden="true"></i></button>
          </div>
        </div>
        <?php
              }
            ?>
      </div>
      
    </div>
  </div>
  <br>
  <br>
  <!--Footer-->
  <footer>

    <ul>
      <li><a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>

      <li><a href="CONTATO.html"> <i class="fa fa-envelope" aria-hidden="true"></i></a></li>

      <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

      <li><a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
    </ul>
    <a class="text-muted">
      Copy Montain Clothes © Curitiba,2019
    </a>
  </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>