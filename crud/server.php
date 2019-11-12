
<?php
    /**
     * Copyright 2019 Rodrigo Prestes Machado
     * 
     * Licensed under the Apache License, Version 2.0 (the "License");
     * you may not use this file except in compliance with the License.
     * You may obtain a copy of the License at
     * 
     * http://www.apache.org/licenses/LICENSE-2.0
     * 
     * Unless required by applicable law or agreed to in writing, software
     * distributed under the License is distributed on an "AS IS" BASIS,
     * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
     * See the License for the specific language governing permissions and
     * limitations under the License.
    */

    // gets the operation
    $op = $_GET["op"];
    switch ($op) {
        case 'create':
            echo fnCreate();    
            break;
        case 'read':
            echo fnRead();    
            break;
         case 'update':
            echo fnUpdate();    
            break;
         case 'delete':
            echo fnDelete();    
            break;
        default:
            break;
    }

    function fnCreate(){
        $name = $_GET["name"];
        $email = $_GET["email"];
        if ($name != ""  && $email != ""){
            $connection = connet();
            $sql = "INSERT INTO CLIENT (NAME, EMAIL) VALUES ('$name', '$email')";
            $result = mysqli_query($connection, $sql);
            $idNew = mysqli_insert_id($connection);
            disconnect($connection);
        }
        return  ($result == true ?  "{\"id\":\"".$idNew."\",\"name\":\"".$name."\", \"email\":\"".$email."\"}" : "{\"result\":\"false\"}");
    }

    /**
     * Loads data from the data base
     */
    function fnRead(){
        $connection = connet();
        $sql = "SELECT * FROM CLIENT";
        $result = mysqli_query($connection, $sql);
        $json = generateJson($result);
        disconnect($connection);
        return $json;
    }

    function fnUpdate(){
        $id = $_GET["id"];
        $name = $_GET["name"];
        $email = $_GET["email"];
        if ($name != ""  && $email != "" && $id != ""){
            $connection = connet();
            $sql = "UPDATE CLIENT SET NAME='$name', EMAIL='$email' WHERE id=$id";
            $result = mysqli_query($connection, $sql);
            disconnect($connection);
        }
        return  ($result == true ?  "{\"id\":\"".$id."\",\"name\":\"".$name."\", \"email\":\"".$email."\"}" : "{\"result\":\"false\"}");
    }

    function fnDelete(){
        $id = $_GET["id"];

        $result = false;
        if ($id != ""){
            $connection = connet();
            $sql = "DELETE FROM CLIENT WHERE id='$id'";
            $result = mysqli_query($connection, $sql);
            disconnect($connection);
        }
        // ternary if
        return  ($result == true ? "{\"result\":\"true\", \"id\":\"". $id . "\"}" : "{\"result\":\"false\"}");
    }

    /**
     * Receives an sql select data and returns a json in string format
     */
    function generateJson($result){
        $json = "";
        while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC))
            $json .= "{\"id\":\"".$line["id"]."\",\"name\":\"".$line["name"]."\", \"email\":\"".$line["email"]."\"},";
        $json = substr($json, 0, strlen($json) - 1);
        $json = "[" . $json. "]";
        return $json;
    }

    /**
     * Connects in MySql data base
     */
    function connet(){
        $connection = mysqli_connect("localhost", "cpw2", "cpw2");
        mysqli_select_db($connection, "cpw2");
        return $connection;
    }

    /**
     * Disconnects from the MySql data base
     */
    function disconnect($connection){
        mysqli_close($connection);
    }
?>