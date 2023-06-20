<?php

    // Nome do editor PHP: Kmodo Edit
    // Pacote com instalação do PHP: WAMP
    // Em caso de erro de DLL: Microsoft Runtime Redistributable
    // Em caso de não executar o WAMP: SKype, Torrent, etc

    echo "Hello World! <br>";
    
    $minhaVariavel = "PHP";
    echo $minhaVariavel . " é uma linguagem de programação!<br>";
    
    $algumValor = 50.15;
    echo $algumValor . "<br>";
    
    $algumValor = $algumValor + 15;
    echo $algumValor . "<br>";
    
    $algumValor = 2 + 4 - 3 * 1;
    echo $algumValor . "<br>";
    
    define("PI", 3.14);
    $algumValor = 50;
    $resultado = $algumValor * PI;
    echo $resultado . "<br>";
    
    // Operações matemáticas
    
    $x = 3 + 5;
    echo "3 + 5 = " . $x . "<br>";
    
    $x = 3 - 5;
    echo "3 - 5 = " . $x . "<br>";
    
    $x = 3 * 5;
    echo "3 * 5 = " . $x . "<br>";
    
    $x = 3 / 5;
    echo "3 / 5 = " . $x . "<br>";
    
    $x = 6 % 5;
    echo "6 % 5 = " . $x . "<br>";
    
    $x = 5;
    echo $x . "<br>";
    
    // $x = $x + 1;
    $x++;
    $x++;
    $x++;
    $x--;
    echo $x . "<br>";
    
    // Operações matemáticas rápidas
    
    $x = 5;
    $x += 3;
    echo $x . "<br>";
    
    $x = 5;
    $x -= 3;
    echo $x . "<br>";
    
    $x = 5;
    $x *= 3;
    echo $x . "<br>";
    
    $x = 5;
    $x /= 3;
    echo $x . "<br>";
    
    $x = 5;
    $x %= 3;
    echo $x . "<br>";
    
    $x = 3 < 4;
    echo "3 < 4 ? " . $x . "<br>";
    
    echo true . "<br>";
    
    $x = 3 > 4;
    echo "3 > 4 ? " . $x . "<br>";
    
    $x = 3 == 4;
    echo "3 == 4 ? " . $x . "<br>";
    
    $x = 3 < 4 && 7 < 10;
    echo "3 < 4 e 7 < 10 ? " . $x . "<br>";
    
    $x = 3 < 4 && 15 < 10;
    echo "3 < 4 e 15 < 10 ? " . $x . "<br>";
    
    $x = 3 < 4 || 7 < 10;
    echo "3 < 4 ou 7 < 10 ? " . $x . "<br>";
    
    $x = 3 < 4 || 15 < 10;
    echo "3 < 4 ou 15 < 10 ? " . $x . "<br>";
    
    $idade = 5;
    if($idade >= 18)
    {
        echo "Ok produto pode ser vendido <br>";
    }
    else
    {
        echo "Produto NEGADO <br>";
    }
    echo "Fim <br>";
    
        
    $idade = 25;
    if($idade >= 18)
    {
        echo "Ok produto pode ser vendido <br>";
    }
    else if($idade >= 17)
    {
        echo "Falta um ano <br>";
    }
    else if($idade >= 16)
    {
        echo "Faltam dois anos <br>";
    }
    else if($idade >= 15)
    {
        echo "Calma, falta pouco tempo para o produto estar acessível <br>";
    }
    else
    {
        echo "Produto NEGADO <br>";
    }
    echo "Fim <br>";
    
    $x = "Vermelho";
    switch($x)
    {
        case "Vermelho":
            echo "PARE";
            break;
        
        case "Amarelo":
            echo "ATENÇÃO";
            break;
        
        case "Verde":
            echo "SIGA";
            break;
        
        default:
            echo "COR INVÁLIDA";
            break;
    }
    echo "<br>";
    
    echo "For: <br>";
    for($y =5 ;  $y <= 17 ; $y++)
    {
        echo "Próximo número: " . $y . "<br>";
    }
    
    echo "For: <br>";
    for($y = 17 ;  $y >= 5 ; $y--)
    {
        echo "Próximo número: " . $y . "<br>";
    }
    
    echo "For: <br>";
    for($y = 0 ;  $y <= 10 ; $y += 2)
    {
        echo "Próximo número a contar: " . $y . "<br>";
    }
    
    $y = 0;
    while($y < 20)
    {
        echo "WHILE: O valor " . $y . " é menor que 20. <br>";
        $y++;
    }
    
    $y = 0;
    while($y < 20)
    {
        if($y == 5)
        {
            break;
        }
        
        echo "WHILE (saída forçada): O valor " . $y . " é menor que 20. <br>";
        $y++;
    }
    
    
    $y = 0;
    while($y < 20)
    {
        
        if($y == 5)
        {
            $y++;
            continue;
        }
        
        echo "WHILE (registro ignorado): O valor " . $y . " é menor que 20. <br>";
        $y++;
    }
    
    echo "Exercícios em aula <br>";
    
    $cotacaoDoDolar = 3.05;
    $valorEmReal = 150;
    $totalEmDolar = $valorEmReal / $cotacaoDoDolar;
    
    $totalEmDolar = round($totalEmDolar, 2);
    
    echo "R$ " . $valorEmReal . " compram U$ " . $totalEmDolar . "<br>";
    
    $sexo = "Feminino";
    $altura = 1.75;
    if($sexo == "Masculino")
    {
        $pesoIdeal = (72.7 * $altura) - 58;
    }
    else if($sexo == "Feminino")
    {
        $pesoIdeal = (62.1 * $altura) - 44.7;
    }
    else
    {
        $pesoIdeal = "Sexo não informado";
    }
    echo $pesoIdeal . "<br>";
    
    for($x = 1; $x <= 100; $x++)
    {
        if($x % 4 == 0)
        {
            echo "PI ";
        }
        else
        {
            echo $x . " ";
        }
    }
    echo "<br>";
    
    $x = 10;
    $y = 50;
    $total = 0;
    
    while($x > 0)
    {
        $total = $total + $y;
        $x--;
    }
    
    echo "Resultado da multiplicação: " . $total . "<br>";
    
    
    
    
?>













