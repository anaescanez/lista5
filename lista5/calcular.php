<?php
    $op= $_GET["operacao"];
    
    $vetor= array(
      0=>$_GET["n1"],
      1=>$_GET["n2"],
      2=>$_GET["n3"],
      3=>$_GET["n4"] 
     
    );
    
    switch ($op){
        case'soma':
            $soma=0;
            for ($i=0; $i<count ($vetor); $i++){
              $soma= $soma + $vetor[$i];  
            }
            echo $soma;
            break;
        case'multiplicacao':
            $mult=1;
            for ($i=0; $i<count ($vetor); $i++){
              $mult= $mult * $vetor[$i];  
            }
            echo $mult;
            break;
        case'subtracao':
            echo $vetor[0]-$vetor[1];
            break;
        case'divisao':
            echo $vetor[0]/$vetor[1];
            break;
        
    }
?>