<?php

  function EQ2_GetAchievementsByCharacterByGuild($guildid) {

    // Test ID = 1465558838

    $guildid = '1465558838';

    $query = EQ2CensusURL.EQ2CensusServiceID.'/json/get/eq2/character?achievements.achievement_list.completed_timestamp=]0&c:show=achievements&c:limit=3&guild.id='.$guildid;
    $result = json_decode(file_get_contents($query));

    echo array_search('id', json_encode($results), false);

    echo '<br /><br /><br />';



    foreach ($result as $key => $value) {
      echo '|'.$key.'----'.$value.'|<br />';
    }

    echo '<br /><br /><br />';

    // echo json_encode($result);

  }

?>
