<?php
    $_nome = "Humberto";
    $_telefone = "2345-0987";
    $_fumante = null;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        <?php
            echo "Existe nome? ".isset($_nome)."</br>";
            echo "Existe telefone? ".isset($_telefone)."</br>";
            echo "Existe fumante? ".isset($_fumante)."</br>";
        ?>
    <body>
    </body>
</html>