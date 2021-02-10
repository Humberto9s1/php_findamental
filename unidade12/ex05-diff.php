<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php
            $data1 = new DateTime('2020-01-01');
            $data2 = new DateTime('2021-02-08');
            $intervalo = $data1->diff($data2);
        ?>

        <pre>
            <?php
                print_r($intervalo);
            ?>
        </pre>
        
        <pre>
            <?php
                print_r($intervalo->format('%y'))."ano"."<br>";
            ?>
        </pre>
        
        <pre>
            <?php
                print_r($intervalo->format('%m'))."mês"."<br>";
            ?>
        </pre>
        
        <pre>
            <?php
                print_r($intervalo->format('%d'))."dia "."<br>";
            ?>
        </pre>

        <pre>
            <?php
                print_r($intervalo->format('%a'))."intervalo entre as duas datas"."<br>";
            ?>
        </pre>

    </body>
</html>