<?php

    // Imprima na tela a soma de todos os números pares de 50 a 100 (incluindo-os).
    // O resultado deve ser 1950.
    // Desafio: Existe uma forma de construir sem o uso de comandos de decisão.
   $total = 0;
   for($y =50 ;  $y <= 100 ; $y += 2)
   {
       $total += $y;   
   }    
   echo $total . " <br>";

    // Escreva um código que retorne o fatorial do número informado na variável $x.
    // Para o valor 4 o resultado deve ser 24.
   $x = 4; 
   $result = 1;
   for($i = $x; $i > 1; $i--) {
	    $result *= $x; 
		$x--;      
	}
    echo $result . " <br>";
    // Escreva um código que calcule o salário de um vendedor. O código deve receber
    // o valor do salário fixo e o valor das vendas do mês do vendedor, que ganha
    // 3% do valor total das vendas, e mais 5% do valor que exceder de 1500.
    // Para o salário de 800 e vendas em 2000 deve resultar em 885.
    $total = 0;
    $salarioVendedor = 800;
    $valorVendasMes = 2000;
        
    $comissao3 =  $valorVendasMes * 0.03;

    if($comissao3 + $valorVendasMes > 1500)
    {
        $comissao5 = ($comissao3 + $valorVendasMes - 1500) * 0.05;
        $total = $salarioVendedor + $comissao3 + $comissao5;
    }
    else
    {
        $total = $salarioVendedor + $comissao3;
    }
    echo "total = " . $total . " <br>";
    
?>













