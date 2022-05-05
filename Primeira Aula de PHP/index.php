<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manipulação de Strings</title>
</head>
<body>
    <?php
        //Converte tudo para maiúsculo
        $aluno = "Joselito Pereira do Poço sem Fundo";
        echo "Nome do aluno em maiúsculo: " . strtoupper($aluno) . "<br><hr>";

        //Converte tudo para minúsculo
        $aluno = "JOSELITO PEREIRA DO POÇO SEM FUNDO";
        echo "Nome do aluno em minúsculo: " . strtolower($aluno) . "<br><hr>";

        //Pega parte da string a partir da posição indicada - usando a variável $aluno
        echo "Exibindo parte do nome do aluno: " . substr($aluno,8) . "<br><hr>";

        //Pega parte da string a partir da posição de início com a quantidade de caracteres solicitado - usando a variável $aluno
        echo "Exibindo parte do nome do aluno: " . substr($aluno,0,8) . "<br><hr>";

        //Pega parte da string a partir da posição de início com a quantidade de caracteres solicitado a partir do fim da string - usando a variável $aluno
        echo "Exibindo parte do nome do aluno: " . substr($aluno,19,-6) . "<br><hr>";

        //Repete uma string na qtde de vezes desejada
        echo "Seu salário é R$ 10" . str_repeat("0",10) . ",00<br><hr>";

        //Qtde de caracteres de uma string - Tamanho da string
        echo "Tamanho da string da variável aluno: " . strlen($aluno) . "<br><hr>";

        //Substitui uma string por outra determinada
        echo "Nome do aluno substituindo PEREIRA por ANDRADE: " . str_replace("PEREIRA", "ANDRADE", $aluno) . "<br><hr>";

        //Exibir posição inicial de uma string determinada
        echo "Posição inicial da palavra FUNDO é: " . strpos($aluno,"FUNDO") . "<br><hr>";

        //Quebra uma string em um array a partir de um caractere determinado
        $array = explode(" ", $aluno);
        echo "Array baseado na string da variável aluno: <br>";
        foreach ($array as $nome)
        {
            echo $nome . "<br>";
        }
        echo "Array posição 3: " . $array[3] . "<br>"; 
        echo "Tamanho array: " . count($array). "<br>";
        echo "Último nome: " . $array[count($array)-1] . "<br>";
    ?>
</body>
</html>