<?php

  include_once './api.php';

  // echo '<br />-- WORLDS -----------------------------------------------------------------------------------------------------------------------------<br /><br />';

  $worlds = EQ2_GetAllWorlds();

  foreach ($worlds as $world) {
    if ($world->id == "100") {
      // echo '$world->status = |'.$world->status.'|<br />';
      // echo 'count($worlds) = |'.count($worlds).'|<br />';
      // echo '$world[] = |';
      // echo var_dump($world);
      // echo '|<br />';
    }
  }

  // echo '<br />-- ACHIEVEMENTS -----------------------------------------------------------------------------------------------------------------------<br /><br />';

  $achievements = EQ2_GetAllAchievements();

  echo json_encode($achievements);

  // Harry
  //
  // http://census.daybreakgames.com/s:mozrin/json/get/eq2/character?guild.id=1465558838&achievements.achievement_list.completed_timestamp=]1&c:limit=2&c:show=achievements&c:join=achievement%5Eon:achievements.achievement_list.id%5Eto:id%5Einject_at:details%5Eshow:name%27category%27subcategory%27event_list

  // echo EQ2_GetAchievementsByCharacterByGuild($guildid);

?>
