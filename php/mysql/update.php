<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP e MySQL: update</title>
</head>
<body>
    <?php
        $connection = mysql_connect("localhost", "cpw2", "cpw2");
        mysql_select_db("cpw2", $connection);

        $query = "update cliente set nome='Prestes' where id=1";
        echo mysql_query($query);

        mysql_close($connection);
    ?>
</body>
</html>