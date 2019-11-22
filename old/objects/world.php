<?php

  function EQ2_GetWorld($worldid) {

    if ( $worldid > 99 && $worldid < 1000 ) {

      $query = 'http://'.'census.daybreakgames.com/s:mozrin/json/get/eq2/world?id='.$worldid;
      $result = json_decode(file_get_contents($query));
    }
    else { $result = '"Invalid World ID/n'; }

    return $result;
  }

  function EQ2_GetAllWorlds() {

    $returncode = array();

    $query = 'http://'.'census.daybreakgames.com/s:mozrin/json/get/eq2/world?c:limit=100';
    $result = json_decode(file_get_contents($query))->world_list;

    echo '$result = |'.$result.'|<br />';

    return $result;
  }

?>
