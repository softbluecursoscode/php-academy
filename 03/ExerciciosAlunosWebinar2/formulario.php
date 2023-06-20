<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício - Webinar #2</title>
    </head>
    <body>
        <?php

            #ESCOLHEOMEU
    
            //Aluno: Joshua Giacobo (Pronúncia: Dioshua)
            //Professor: André Milani
    
            /*
                Escreve os valores inseridos no formulário.
        
                echo "</br>Valor Inicial: ".$_POST["valorI"];
                echo "</br>Valor Final: ".$_POST["valorF"];
                echo "</br>Valor Múltiplo:".$_POST["valorM"];
            */
    
            //Variáveis
            $valorI = $_POST["valorI"];
            $valorF = $_POST["valorF"];
            $valorM = $_POST["valorM"];
            $atencao = "ATENÇÃO:";
            $soma = 0;
    
            echo "<br>";
            
            //Validar Valor Inicial
            if(!isset($valorI) || (strlen($valorI) <= 0 || filter_var($valorI, FILTER_VALIDATE_INT) === false)){
                echo "</br><b><font color=red>ATENÇÃO:</font></b>";
                echo "Valor Inicial não informado!";
            //Validar Valor Final
            }else if (!isset($valorF) || (strlen($valorF) <= 0 || filter_var($valorF, FILTER_VALIDATE_INT) === false)){
                echo "</br><b><font color=red>ATENÇÃO:</font></b>";
                echo "Valor Final não informado!";
            //Validar Valor Múltiplo
            }else if (!isset($valorM) || (strlen($valorM)) <= 0 || filter_var($valorM, FILTER_VALIDATE_INT) === false){
                echo "</br><b><font color=red>ATENÇÃO:</font></b>";
                echo "Valor Múltiplo não informado!";
            }
    
            ///Validar novamente as Variáveis. Caso existam, calcular os Múltiplos de ValorM.
            if(isset($valorI) == false || strlen($valorI) <=0 || filter_var($valorI, FILTER_VALIDATE_INT) === false){
                echo "";
            }else if (isset($valorF) == false || strlen($valorF) <= 0 || filter_var($valorF, FILTER_VALIDATE_INT) === false){
                echo "";
            }else if (isset($valorM) == false || strlen($valorM) <= 0 || filter_var($valorM, FILTER_VALIDATE_INT) === false){
                echo "";
            }else{
                for ($valorI; $valorI<=$valorF; $valorI++){      
                    if ($valorI % $valorM == 0){
                        //echo "</br>$valorI";
                        $soma += $valorI;
                    } 
                }
                echo "<br> A soma entre os Múltiplos de $valorM é: <b>$soma</b>";
            }   
        ?>    
        <form action="index.html">
            <input type="submit" value="Voltar"/>
        </form>
    </body>
</html>
