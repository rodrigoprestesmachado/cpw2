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
       $connection = mysqli_connect("localhost", "cpw2", "cpw2");

       mysqli_select_db($connection, "cpw2");
       $query = "SELECT * FROM CLIENTE";
   
       $result = mysqli_query($connection, $query);
   
       /* Mostrando os resultados em HTML */
       echo "<table>\n";
       while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           echo "\t<tr>\n";
           foreach ($line as $column => $value){
               echo "\t\t<td>$column $value</td>\n";
           }
           echo "\t</tr>\n";
       }
       echo "</table>\n";
       
       /* Libera o conjunto de resultados */
       mysqli_free_result($result);
       /* Fechando a conexão */
       mysqli_close($connection);
    ?>


</body>
</html>