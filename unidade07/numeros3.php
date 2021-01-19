<?php
    $_gasolina = 4.55;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            echo "Preço da Gasolina = $_gasolina"."</br>"."</br>";
            echo "Arredondar para a média"."</br>";
            echo round($_gasolina)."</br>"."</br>";

            echo "Arredondar para cima"."</br>";
            echo ceil($_gasolina)."</br>"."</br>";

            echo "Arredondar para a baixo"."</br>";
            echo floor($_gasolina)."</br>"."</br>";
        ?>
        
        
    </body>
</html>