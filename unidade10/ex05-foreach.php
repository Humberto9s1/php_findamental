<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_salada = array("laranja","uva","abacate", "limão", "mamão");

        for($_i = 0; $_i <3 ;$_i++){
            echo $_salada[$_i] . "</br>";
        }

        foreach($_salada as $_fruta){
            echo $_fruta . "</br>";
        }
    ?>
</body>
</html>