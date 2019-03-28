<!DOCTYPE html>
<html>
    <head>
        
        <title>Exercício 2</title>
        <meta charset="utf-8">
        
    </head>
    <body>
        <?php 
        
        $vetor= array(
          0=>'Dumbo',  
          1=>'Capitã Marvel',  
          2=>'O Rei Leão',
          3=>'A Bela e a Fera',  
          4=>'Procurando Nemo',  
          5=>'Extraordinário',
          6=>'Meu Malvado Favorito',  
          7=>'Operação Big Hero',  
          8=>'Wall-E',
          9=>'O Menino do Pijama Listrado'
        
        );
        
        for ($i=0; $i<=9; $i++){
         echo "<a href='processa.php?filme=$i'>$vetor[$i]</a><br>";
        }
        
        ?>
        
        
    </body>
</html>

