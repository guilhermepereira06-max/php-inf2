<?php 
    
    $cidade = '<b>Bauru</b>';//Variavel da Cidade com tag de negrito
    $dia = 6; //Variavel do dia
    $mes = 'Março'; //Variavel do mes
    $ano = 2025; //Variavel ano
    
    while($dia < 31){
        //Apresentação da mensagens com as variaveis
        echo "$cidade <i>Dia $dia</i>, de $mes de <mark>$ano</mark><br>";
        $dia+=7;
    }
   
?>