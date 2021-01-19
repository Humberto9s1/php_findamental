<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_dia = "domingo";
            $_sexo = 19;
            $_idade = "feminino";

            if ($_dia == "sabado" || $_dia == "domingo") {
                echo "Pode descansar." . "</br>";
            } else {
                echo "Dia de trabalho." . "</br>";
            }
            

            if ($_idade >= 18 && $_sexo == "feminino") {
                echo "Pode entrar na festa.";
            } else {
                echo "Não pode entrar na festa.";
            }
        ?>
    </body>
</html>