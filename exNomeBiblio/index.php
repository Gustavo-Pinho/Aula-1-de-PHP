<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="GET">
    <h3>Nome Bibliográfico</h3>
    <p>Informe seu nome: <input type="text" name="nome"></p>
    <input type="submit" value="nome">
    <br><br>
</form>

<?php
    //Codifique uma solução para exibir um nome qualquer, digitado pelo usuário, no formato bibliográfico.

    //Exemplo:

    //Nome completo da pessoa: Mariana Andrade dos Santos de Oliveira Silva
    //Nome bibliográfico: SILVA, M. A. S. O.
    
    $nome = strtoupper($nome = $_GET["nome"]);
    
    $nome = str_replace(" DA "," ",$nome);
    $nome = str_replace(" DAS "," ", $nome);
    $nome = str_replace(" DE "," ",$nome);
    $nome = str_replace(" E "," ",$nome);
    $nome = str_replace(" DO "," ",$nome);
    $nome = str_replace(" DOS "," ",$nome);
    
    $array = explode(" ",$nome);
    

    echo $array[count($array)-1] . " ";
    for($i = 0; $i<=count($array)-2; $i++){
        echo substr($array[$i],0,1) . " . ";
    }
    
?>
</body>
</html>