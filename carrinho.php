<!DOCTYPE html>
<?php

$nome = $_POST['nome'];


if(!empty($nome)){
  header("Location: index.html");
}
else{
  
}

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
            padding: 2%;
            width: auto;
            height: auto;
            background: #fff;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .card {
            margin-top: 3%;
            margin-right: 1%;
            margin-left: 3%;
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

        .srigth {
            width: 200px;
        }

        .logado {
            border-radius: 50%;
            border: 4px solid #f06d01;
            box-shadow: 3px 3px 30px 1px #262626;
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
            padding-left: 20rem;
        }

        h2 {
            text-align: center;
            color: #262626;

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
            margin-bottom: 0;
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

        .tamanho-img {
            margin-left: 5%;
            padding: 0;

        }

        .border-img {
            border: 7px solid #262626;
            box-shadow: 2px 2px 20px 2px #262626;
        }
    </style>

  <!--Navbar-->

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-nav">
    <img href="index.php" src="img/logo-ajustada.png" width="10%" height="10%">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">

        <div class="sright">
          <a href="perfil.php?acao=carregar&id="><img href="perfil.php" title="Visitar Perfil."  class="logado" src="img/usericon.png" width="5%" height="100%" /></a>
          <i class="fa fa-sign-out" aria-hidden="true"></i><a href="login.php" class="espaco-menu">Logout</a>
          <a href="login.php" class="btn btn-secondary">Login</a>
          <a href="cadastroUser.php" class="btn btn-secondary">Cadastre-se</a>
        </div>
      </div>
    </div>
  </nav>

    <div class="container">
        <div class="box">
            <h3>Carrinho</h3>
            <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>VALOR</th>
                        <th>DESCRIÇÃO</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    <?php
                    foreach ($listaJogosArray as $jogo) {
                        ?>
                        <tr>
                            <td><?= $jogo['id'] ?></td>
                            <td><?= $jogo['nome'] ?></td>
                            <td><?= $jogo['valor'] ?></td>
                            <td><?= $jogo['descricao'] ?></td>
                            <td><a class="btn btn-danger" href="cadastro.php?acao=excluir&id=<?= $jogo['id'] ?>">Excluir</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>

        </div>
        <br>


    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</html>