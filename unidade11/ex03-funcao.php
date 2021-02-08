<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function converterCF($temp){
            return ($temp*1.8)+32;
        }

        echo converterCF(30);
    ?>
</body>
</html>