<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "Existe o elemento? " . in_array("Laranja", $_salada) . "</br>"; //Retorna 1 se true e nada se nao achar
            echo "Existe o elemento? " . array_search("Abacate", $_salada). "</br>"; //Retorna a posição se true e nada se nao achar
        ?>
    </body>
</html>