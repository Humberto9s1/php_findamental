<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_idade = 21;
            $_moioridade = ($_idade >= 18) ? "maior de idade" : "menor de idade";
            echo $_moioridade; 
        ?>
    </body>
</html>