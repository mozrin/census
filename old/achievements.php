<?php

  echo "<html>";

  include 'header.php';

  echo "<body>";

  $id = $_GET['id'];

  $website = file_get_contents('http://census.daybreakgames.com/s:mozrin/json/get/eq2/character/'.$id);

  $parsed = json_decode($website);

  $type_total_points = $parsed->character_list[0]->achievements->total_points;

  foreach($parsed->character_list[0]->achievements->achievement_list as $ach)
  {
    echo "DATE: ".date('m/d/Y', $ach->completed_timestamp)."<br />";
    echo "ID: ".$ach->id."<br />";
  }

  echo "</body></html>";
?>
