<?php

  function EQ2_GetWorld($worldid) {

    if ( $worldid > 99 && $worldid < 1000 ) {

      $query = EQ2CensusURL.EQ2CensusServiceID.'/json/get/eq2/world?id='.$worldid;
      $result = json_decode(file_get_contents($query));
    }
    else { $result = '"Invalid World ID/n'; }

    return $result;
  }

  function EQ2_GetAllWorlds() {

    $returncode = array();

    $query = EQ2CensusURL.EQ2CensusServiceID.'/json/get/eq2/world?c:limit=100';
    $result = json_decode(file_get_contents($query))->world_list;

    return $result;
  }

?>
