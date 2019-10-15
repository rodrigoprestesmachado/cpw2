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
<?php
    $strSearch = $_GET["name"];
    $number = $_GET["number"];
    if ($strSearch == null){
        echo "Não existem argumentos para serem procurados";
        exit();
    }
        
    $names = array("Rodrigo", "Roberto", "Rafael", "Ricardo");
    $results = array();

    $find = false;
    foreach($names as $name) {
        $substr = substr($name, 0, $number);
        if (strtoupper($substr) == strtoupper($strSearch)){
            $results[] = $name;
            $find = true;
        }
    }

    $json = "";
    if ($find == true){
        foreach($results as $found) {
            $json .= "{\"name\":\"" . $found . "\"},";
        }

        $json = substr($json, 0, strlen($json) - 1);
        $json = "[" . $json. "]";
    }

    echo $json;
?>