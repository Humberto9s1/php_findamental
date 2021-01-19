<?php
    $_megasena = array(47,29,42,04,27,21);
    sort($_megasena); //ordem Crescente
    //rsort($_megasena); ordem Decrescente -- r de reverso
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Documentação de Array -- https://www.php.net/manual/pt_BR/book.array.php " . "</br>" . "</br>";
            echo "Menor valor " . min($_megasena) . "</br>";
            echo "Maior valor " . max($_megasena) . "</br>";
        ?>
        <pre>
            <?php 
                print_r($_megasena);
            ?>
        </pre>
    </body>
</html>