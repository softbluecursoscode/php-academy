<?php

    echo "Tamanho de \"Softblue\": " . strlen("Softblue") . "<br>"; // 8
    echo "Tamanho de 'Andre': " . strlen("Andre") . "<br>"; // 5
    echo "Tamanho de 'André': " . strlen("André") . "<br>"; // 6
    echo "Tamanho de 'André': " . strlen(utf8_decode("André")) . "<br>"; // 5

    echo "Filtro de 'a': " . filter_var("a", FILTER_VALIDATE_INT) . "<br>"; // false
    echo "Filtro de '5': " . filter_var("5", FILTER_VALIDATE_INT) . "<br>"; // 5
    echo "Filtro de 'andrem@softblue.com.br': " . filter_var("andrem@softblue.com.br", FILTER_VALIDATE_EMAIL) . "<br>"; // andrem@softblue.com.br
    echo "Filtro de 'andrem@#@softblue.com.br': " . filter_var("andrem@#@softblue.com.br", FILTER_VALIDATE_EMAIL) . "<br>"; // 
    echo "Filtro de 'http://www.phpacademy.com.br': " . filter_var("http://www.phpacademy.com.br", FILTER_VALIDATE_URL) . "<br>"; // http://www.phpacademy.com.br
    echo "Filtro de 'não tenho facebook': " . filter_var("não tenho facebook", FILTER_VALIDATE_URL) . "<br>"; //
    
    /*
    echo "Nome informado: " . $_POST["nome"] . "<br>";
    echo "Tipo informado: " . $_POST["tipo"] . "<br>";
    echo "Mudar a cada 6 meses: " . $_POST["mudar"] . "<br>";
    echo "URL informada: " . $_POST["url"] . "<br>";
    echo "E-mail informado: " . $_POST["email"] . "<br>";
    echo "Usuário informado: " . $_POST["usuario"] . "<br>";
    echo "Senha informada: " . $_POST["senha"] . "<br>";
    */
    
    $resultado = "";
    
    // Validando nome...
    if( isset($_POST["nome"]) == false || strlen($_POST["nome"]) < 5 || strlen($_POST["nome"]) > 128)
    {
        $resultado = "O nome da senha não é válido.";
    }
    
    // Validando tipo...
    else if( isset($_POST["tipo"]) == false || $_POST["tipo"] == "Selecione..." )
    {
        $resultado = "O tipo da senha não é válido.";
    }
    
    // Validando tempo de mudança..
    else if( isset($_POST["mudar"]) == false || ($_POST["mudar"] != 's' && $_POST["mudar"] != 'n'))
    {
        // Exemplo de comentário...
        $resultado = "Mudar senha da cada 6 meses inválido.";
    }
    else if( isset($_POST["url"]) == false || filter_var($_POST["url"], FILTER_VALIDATE_URL) == false )
    {
        $resultado = "URL inválida.";
    }
    else if( isset($_POST["email"]) == false || filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false)
    {
        $resultado = "E-mail inválido.";
    }
    else if( isset($_POST["usuario"]) == false || strlen($_POST["usuario"]) < 5)
    {
        $resultado = "Nome de usuário inválido.";
    }
    else if( isset($_POST["senha"]) == false || strlen($_POST["senha"]) < 6)
    {
        $resultado = "Senha inválida.";
    }
    else
    {
        $resultado = "<font color=green>Sucesso!</font>";
    }
    
    echo $resultado;
    
?>













