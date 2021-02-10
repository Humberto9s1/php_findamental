<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <?php

            $nome = isset($_POST["nome"]) ? $_POST["nome"] : "Sem definição";
            $email = isset($_POST["email"]) ? $_POST["email"] : "Sem definição";
            
            echo "Nome: ". $nome ."<br>";
            echo "Email: ". $email;
        ?>

    </body>
</html>