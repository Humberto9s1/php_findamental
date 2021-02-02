<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_agenda = array("nome" => "Humberto",
                        "telefone" => "999-888-777",
                        "salario" => 1000.50);
        foreach( $_agenda as $_contato => $_valor ){
            echo $_contato . ": " . $_valor . "</br>";
        }
    ?>
</body>
</html>