<?php

$string = file_get_contents('http://census.daybreakgames.com/s:mozrin/json/get/eq2/constants');

$json = json_decode($string, true);

    foreach ($json as $key => $value){
        echo "$key: $value\n";
    };

?>
