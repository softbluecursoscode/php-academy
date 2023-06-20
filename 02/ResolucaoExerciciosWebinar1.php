<?php

    // Instalação do PHP
    // http://www.wampserver.com
    
    // Instalação do Komodo Edit
    // https://www.activestate.com/komodo-ide/downloads/edit
    
    echo "Solução dos exercícios do webinar #1";
    
    //Aluno: Demys Alves Brito

    // Imprima na tela a soma de todos os números pares de 50 a 100 (incluindo-os).
    $soma = 0;
    for ($i=50; $i <= 100; $i+=2)
    {
        $soma += $i;
        echo $i . " ";
    }
    
    echo "Soma dos números pares entre 50 a 100: " . $soma;
    echo "<br>";
    
    /*
        for ($i=50; $i <= 100; $i+=1)
        {
            if($i % 2 == 0)
            {
                $soma += $i;
            }
        }
     */
     
    
    // Aluna: Katiellen da Silveira Pereira
    
    // Escreva um código que retorne o fatorial do número informado na variável $x.
    // Para o valor 4 o resultado deve ser 24.
   $x = 4; 
   $result = 1;
   for($i = $x; $i > 1; $i--) {
	    $result *= $x; 
		$x--;      
	}
    
     echo $result . " <br>";
    
    // Aluno: Yuri Jivago Xavier Diniz
    
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