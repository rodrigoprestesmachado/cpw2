<!--
 Copyright 2019 Rodrigo Prestes Machado

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

 http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
-->
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
        // Abre a conexão com o banco de dados 
       $connection = mysql_connect("localhost", "cpw2", "cpw2", MYSQL_CLIENT_COMPRESS);

       mysql_select_db("cpw2", $connection);
       $query = "SELECT * FROM CLIENTE";
   
       $result = mysql_query($query);
   
       /* Mostrando os resultados em HTML */
       echo "<table>\n";
       while ($line = mysql_fetch_array($result, MYSQL_ASSOC)){
           echo "\t<tr>\n";
           foreach ($line as $column => $value){
               echo "\t\t<td>$column $value</td>\n";
           }
           echo "\t</tr>\n";
       }
       echo "</table>\n";
       
       /* Libera o conjunto de resultados */
       mysql_free_result($result);
       /* Fechando a conexão */
       mysql_close($connection);
    ?>


</body>
</html>