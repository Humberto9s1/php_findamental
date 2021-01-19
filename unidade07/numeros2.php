<?php
    $salario = 1095;
    $gasolina = 4.55;
    $telefone = "3456-0987";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            echo "Testar se é numérica"."</br>";
            echo "O $salario é um número ? " . is_numeric($salario). "</br>"; 
            echo "O $gasolina é um número ? " . is_numeric($gasolina) . "</br>"; 
            echo "O $telefone é um número ? " . is_numeric($telefone)."</br>"."</br>"; 

            echo "Testar se é inteiro"."</br>";
            echo "O $salario é um inteiro ? " . is_int($salario). "</br>"; 
            echo "O $gasolina é um inteiro ? " . is_int($gasolina) . "</br>"; 
            echo "O $telefone é um inteiro ? " . is_int($telefone)."</br>"."</br>";

            echo "Testar se é float"."</br>";
            echo "O $salario é um float ? " . is_float($salario). "</br>"; 
            echo "O $gasolina é um float ? " . is_float($gasolina) . "</br>"; 
            echo "O $telefone é um float ? " . is_float($telefone)."</br>"."</br>";
        ?>
        
        
    </body>
</html>