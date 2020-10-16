<?php

    require_once 'funcoes.php';
    $retorno = empty($_POST);

    if(!$retorno){
    //echo $retorno;
    //print_r($_POST);
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $operacao = $_POST['operacao'];
    //echo $valor1." | ".$valor2." | ".$operacao;
        $res = calculo($valor1,$valor2,$operacao);
    //echo $res;
    }
?>
<html>
    <head>
        <meta charset="UTF-8" content="utf-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="trabalhoPHPcaulculadora.css" rel="stylesheet" type="text/css">
        <title>Exercício de Calculo</title>
</head>


<body>
    <img src="">
    <div class="container">
    <h1>Exercício de Calculos</h1>
    <form action="trabalhoPHPcalculadora.php" method="POST">

    <input class="inputn1" type="number" name="valor1" placeholder="Digite o Primeiro Número" required/>
    
    
    
    <select name="operacao">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <input class="inputn2" type="number" name="valor2" placeholder="Digite o Segundo Número" required/>
    
    <input class="inputigual" type="submit" value="="/>

<br/><br/>

<p>Resultado</p>

<input class="inputnres" type="number" name="resultado" value="<?=$res?>"/>

</form>  
</div>


</body>
</html>    