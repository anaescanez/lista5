<!DOCTYPE html>
<html>
    <head>
        
        <title>Exercício 3</title>
        <meta charset="utf-8">
        
    </head>
    <body>
        <?php
       
        $vetor= array(
            0=> 1831232,
            1=> 1831275,
            2=> 1831364,
            3=> 1831224
        );
        
        for ($i=0; $i < count ($vetor); $i++){
         echo "<a href='mostraNome.php?id=$vetor[$i]'>$vetor[$i]</a><br>";
        }
        
        ?>
        
    </body>
</html>