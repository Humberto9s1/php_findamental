<?php 
    $_salario = 800;
    $_meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo $_salario * $_meses . "</br>";      
            echo $_salario / 2 . "</br>";      

            // Exponencial
            echo "Exponencial: " . pow(6,3) . "</br>"; 

            // Raiz Quadrada
            echo "Raiz Quadrada: " . sqrt(36) . "</br>"; 

            // Randômico Generica
            echo "Números Genéricos : " . rand() . "</br>"; 

            // Randômico entre um intervalo
            echo "Radomico Intervalo : " . rand(5,10) . "</br>"; 
            
            // Valor absoluto
            echo "Números Absoluto : " . abs(-50) . "</br>"; 

        ?>
    </body>
</html>