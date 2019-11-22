<?php

  echo "<html><head><title>Collection Data</title></head><body>";

  $website = file_get_contents('http://census.daybreakgames.com/s:mozrin/json/get/eq2/character/502511604703');

  $parsed = json_decode($website);

  $collections_active = $parsed->character_list[0]->collections->active;
  $collections_complete = $parsed->character_list[0]->collections->complete;

  $collections_all = $collections_active + $collections_complete;

  echo "     ALL = ".$collections_all."<br />";
  echo "  ACTIVE = ".$collections_active."<br />";
  echo "COMPLETE = ".$collections_complete."<br />";

  // echo $myArray[0]['id']; // Fetches the first ID
  // echo $myArray[0]['c_name'];

  echo "</body></html>";

 ?>
