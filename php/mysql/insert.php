<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP e MySQL: select</title>
</head>
<body>
    <?php
        $connection = mysql_connect("localhost", "cpw2", "cpw2");
        mysql_select_db("cpw2", $connection);

        $novoNome = "Maria";
        $query = "insert into cliente (nome) value ('$novoNome')";
        echo mysql_query($query);

        mysql_close($connection);
    ?>
</body>
</html>