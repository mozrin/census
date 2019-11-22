<?php

  function EQ2_GetAchievement($achievementid) {

    $query = EQ2CensusURL.EQ2CensusServiceID.'/json/get/eq2/achievement?id='.$achievementid;
    $result = json_decode(file_get_contents($query));

    return $result;
  }

  function EQ2_GetAllAchievements() {

    $limit = 2;

    $query = EQ2CensusURL.EQ2CensusServiceID.'/json/get/eq2/achievement?c:start=0&c:limit='.$limit;
    $result1 = json_decode(file_get_contents($query))->achievement_list;

    $result2 = $result;
    $result3 = $result;

    $rc = array();

    array_push($rc, $result1, $result1, $result1);

    $rc

    return $rc;
  }

?>
