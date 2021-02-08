<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function retornarDiaria($salario, $dias) {
            return number_format( $salario/$dias, 2);
        }

        echo retornarDiaria(5000, 15).'<br>';
        echo retornarDiaria(5000, 28).'<br>';
    ?>
</body>
</html>