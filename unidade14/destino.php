<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <?php
            print_r($_POST);
        ?>
       
        <?php
            print_r($_POST["nome"]);
        ?>
       
        <?php
            print_r($_POST["email"]);
        ?>
    </body>
</html>