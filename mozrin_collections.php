<?php

  $website = file_get_contents('http://census.daybreakgames.com/s:mozrin/json/get/eq2/character/502511604703');

  $parsed = json_decode($website);

  $collections_active = $parsed->character_list[0]->collections->active;
  $collections_complete = $parsed->character_list[0]->collections->complete;

  $collections_all = $collections_active + $collections_complete;

  echo '<div class="container">';

  echo 'ALL = '.$collections_all;
  echo 'ACTIVE = '.$collections_active;
  echo 'COMPLETE = '.$collections_complete;

  echo '</div>';

 ?>
