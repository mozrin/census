<?php

  $worlds = EQ2_GetAllWorlds();

  foreach ($worlds as $world) {
    if ($world->id == "100") {
      echo '$world->status = |'.$world->status.'|<br />';
      echo 'count($worlds) = |'.count($worlds).'|<br />';
      echo '$world[] = |';
      echo var_dump($world);
      echo '|<br />';
    }
  }

?>
