
<?php
    /**
     * CPW2 by Rodrigo Prestes Machado
     * 
     * CPW2 is licensed under a
     * Creative Commons Attribution 4.0 International License.
     * You should have received a copy of the license along with this
     * work. If not, see <http://creativecommons.org/licenses/by/4.0/>.
     *
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
        while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $id = isset($line["id"]) ? $line["id"] : null;
            $name = isset($line["name"]) ? $line["name"] : null;
            $email = isset($line["email"]) ? $line["email"] : null;
            $json .= "{\"id\":\"".$id."\",\"name\":\"".$name."\", \"email\":\"".$email."\"},";
        }
        $json = substr($json, 0, strlen($json) - 1);
        $json = "[" . $json. "]";
        return $json;
    }

    /**
     * Connects in MySql data base
     */
    function connet(){
        $connection = mysqli_connect("db", "crud", "crud");
        mysqli_select_db($connection, "crud");
        return $connection;
    }

    /**
     * Disconnects from the MySql data base
     */
    function disconnect($connection){
        mysqli_close($connection);
    }
?>