<?php

      //Aluno: Demys Alves Brito

  // Imprima na tela a soma de todos os números pares de 50 a 100 (incluindo-os).
  $soma = 0;
  for ($i=50; $i <= 100; $i+=2)
  {
      $soma += $i;
  }
  echo "Soma dos números pares entre 50 a 100: " . $soma;
  echo "<br>";

  //---------------------------------------------------

  //Escreva um código que retorne o fatorial do número informado na variável $x.

  $x = 4;
  $fatorial = $x;
  for ($i=$x-1; $i > 0; $i--) {
    $fatorial *= $i;
  }
  echo "Fatorial de " . $x . ": " . $fatorial;
  echo "<br>";

  //---------------------------------------------------

  // Escreva um código que calcule o salário de um vendedor. O código deve receber
  // o valor do salário fixo e o valor das vendas do mês do vendedor, que ganha
  // 3% do valor total das vendas, e mais 5% do valor que exceder de 1500.
  // Para o salário de 800 e vendas em 2000 deve resultar em 885.

  $salarioFixo = 800;
  $valorVendasMes = 2000;

  $salarioVendedor = $salarioFixo + ($valorVendasMes * 3)/100;
  if(($valorVendasMes - 1500) > 0) {
    $salarioVendedor += ($valorVendasMes - 1500) * 5/100;
  }
  echo "Salário final do vendedor: R$ " . $salarioVendedor;

    
?>













