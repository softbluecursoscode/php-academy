<?php

    // Imprima na tela a soma de todos os números pares de 50 a 100 (incluindo-os).
    // O resultado deve ser 1950.
    // Desafio: Existe uma forma de construir sem o uso de comandos de decisão.
    for($i = 50; $i<=100; $i += 2)
    {
    	echo $i . "<br>";
    }
    
    // Escreva um código que retorne o fatorial do número informado na variável $x.
    // Para o valor 4 o resultado deve ser 24.
    $fatorial = 1;
    $x = 4;
    for($i = $x; $i>=1; $i--)
    {
    	$fatorial *= $i;
    }
    echo $x . "! = " . $fatorial;
   
    // Escreva um código que calcule o salário de um vendedor. O código deve receber
    // o valor do salário fixo e o valor das vendas do mês do vendedor, que ganha
    // 3% do valor total das vendas, e mais 5% do valor que exceder de 1500.
    // Para o salário de 800 e vendas em 2000 deve resultar em 885.
    $salarioFixo = 800.00;
    $valorVendas = 2000.00;
    
    $salarioTotal = $salarioFixo + (0.03 * $valorVendas);
    
    if($valorVendas>1500)
    {
    	$salarioTotal += ($valorVendas - 1500) * 0.05;
    }
    
    echo "R$" . $salarioTotal;
    
?>













