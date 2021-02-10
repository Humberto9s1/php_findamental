<?php
    if(isset($_POST["formulario"])){
        print_r($_POST);
    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
    <?php IF(!isset($_POST["formulario"])){ ?>
        <form action="formulario2 php.php" method="post">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            
            <input type="submit" value="Enviar Cadastro">
        </form>
        <?php
        }else

        echo "Nome: ". $nome ."<br>";
        echo "Email: ". $email;

        ?>
    </body>
</html>