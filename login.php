<!DOCTYPE html>
<?php
session_start();
require_once  'lib/Facebook/autoload.php';
require_once 'functions/funLogin.php';

$fb = new Facebook\Facebook([
    'app_id' => '2825722260772556',
    'app_secret' => '67223e851d333e7fac62b3ead60c9af2',
    'default_graph_version' => 'v3.2',
]);

$helper = $fb->getRedirectLoginHelper();
//var_dump($helper);
$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost:81/montainmarket/login.php', $permissions);

$email = "";
$url = "";
$nome = "";

$accessToken = $helper->getAccessToken();

if (!empty($accessToken)) {
    try {
        // Returns a `Facebook\FacebookResponse` object
        $response = $fb->get('/me?fields=name,picture,email', $accessToken);
        $user = $response->getGraphUser();
        $email = $user['email'];
        $urlImg = $user['picture']['url'];
        $nome = $user['name'];

    } catch (Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
    } catch (Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }
}
if (!empty($email)) {
    $_SESSION['user_nome'] = $nome; 
    $_SESSION['user_email'] = $email;
    $_SESSION['avatar'] = $urlImg;
   
    $returnEmail = buscaemail($email);
    
    if(empty($returnEmail)){
        registraUser($email,$urlImg,$nome);        
        header('location: index.php');
    }else
    {
        header('location: index.php');
    }
}

//Login com o banco de dados



?>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://use.fontawesome.com/243239556e.js"></script>
</head>

<body>
    <style>
        body {
            margin: 0px;
            background-image: url("img/background.jpg");
            background-attachment: fixed;
        }

        .container {
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center
        }

        .box {
            width: 500px;
            height: 700px;
            background: #fff;
            padding-left: 2%;
            padding-right: 2%;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #ffffff;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: #303644;
            border: 0px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
           
        }

        a {

            border-radius: 20px;
            padding: 10px;
            padding-left: 8%;
            padding-right: 8%;
            text-align: center;
            line-height: 35px;
            color: #fff;
            font-size: 18px;
            text-decoration: none;
            font-family: 'Arial';
            background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
            background-size: 500%;
            z-index: 1;
            box-shadow: -10px 2px 30px 2px  rgb(255, 113, 24);
        }

        a:hover {
            text-decoration: none;
            animation: animate 8s linear infinite;
        }
        button{
            transform: rotate(0deg) skewX(6deg) translate(0,0);
            opacity: .8;
            transition: transform 0.6s;
            box-shadow: -10px 2px 30px 2px  #262626;
            margin-right: 10px;
            margin-left: 10px;
            margin-bottom: 15px;
            
        }
       
     
       button:before{
    content: "";
    position:absolute;
    top:4px;
    left:-9px;
    height: 100%;
    width: 9px;
    background: black;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
}
button:after{
    content: '';
    position: absolute;
    bottom: -8px;
    left:-4px;
    height:9px;
    width: 100%;
    background: #262626;
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
    
}
button:hover{
    color: rgb(255, 113, 24);
    
    transform: rotate(0deg) skew(2deg) translate(0px,7px);
    
        }
.akk{
    width: 90%;
    background: black;
     color: white;
     transform: rotate(0deg) skewX(0deg) translate(0,0);
            opacity: .8;
            transition: transform 0.6s;
            box-shadow: -10px 2px 30px 2px  #262626;
            margin-right: 22px;
            margin-left: 22px;
            margin-bottom: 50px;
            border: none;
}
.akk:before{
    content: '';
    position: absolute;
    top:10px;
    left:-20px;
    height:100%;
    width: 20px;
    background: #0d5a6d;
    transform: 0.5s;
    transform: rotate(0deg) skewY(-45deg);
    
}
.akk:after{
    content: '';
    position: absolute;
    bottom: -30px;
    left:-10px;
    height:20px;
    width: 100%;
    background: #1688a5;
    transform: 0.5s;
    transform: rotate(0deg) skewX(-45deg);
    
}
        .akk:hover{
    color: rgb(255, 113, 24);
    transform: rotate(0deg) skew(2deg) translate(-2px,10px);
    
   
        }

  

        @keyframes animate {
            0% {
                background-position: 0%;
            }

            100% {
                background-position: 250%;
            }
        }

        .mds {
            margin-left: 4%;
        }
        label{
            font-size: 20px;
            margin-bottom: 25px;
           
        width: 100%;        }
      
       
    </style>

    <div class="container">
        <div class="box">
            </br>
            <center>
                <img src="img/logo-ajustada.png" width="80%">
                <br></br>
            </center>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control akk" name="email" placeholder="Seu email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control akk" name="senha" placeholder="Sua senha">
                </div>
                <center>
                    <button type="submit" class="btn">Login</button>
                    <button type="submit" class="btn">Registre-se</button>
                    <br><br>
                    <a href="<?php echo $loginUrl; ?>"><i class="fa fa-facebook-square"></i> Entrar com Facebook</a>
                    <br><br>
                    <p class="text-muted">
                        Copy Montain Gloves © Curitiba,2019
                    </p>
                </center>
            </form>

        </div>
    </div>




    <script src="js/bootstrap.min.js"></script>

</body>


</html>