<?php

  echo "<html><head><title>PVP Data</title></head><body>";

  echo $_SERVER['QUERY_STRING'];

  echo "<br />";
  echo parse_url('http://www.designcise.com/?key1=value1&key2=value2', PHP_URL_QUERY);
  echo "<br />";
  echo $_GET['email'];

  echo "<br />";
  echo "<br />";

  $website = file_get_contents('http://census.daybreakgames.com/s:mozrin/json/get/eq2/character/502511604703');

  $parsed = json_decode($website);

  $pvp_kvd = $parsed->character_list[0]->pvp->kvd;
  $pvp_deaths = $parsed->character_list[0]->pvp->deaths;
  $pvp_death_streak = $parsed->character_list[0]->pvp->death_streak;
  $pvp_title_rank = $parsed->character_list[0]->pvp->title_rank;
  $pvp_kill_streak = $parsed->character_list[0]->pvp->kill_streak;
  $pvp_total_kills = $parsed->character_list[0]->pvp->total_kills;
  $pvp_last_killer = $parsed->character_list[0]->pvp->last_killer;
  $pvp_city_kills = $parsed->character_list[0]->pvp->city_kills;
  $pvp_wild_kills = $parsed->character_list[0]->pvp->wild_kills;

  echo "pvp_kvd = ".$pvp_kvd."<br />";
  echo "pvp_deaths = ".$pvp_deaths."<br />";
  echo "pvp_death_streak = ".$pvp_death_streak."<br />";
  echo "pvp_title_rank = ".$pvp_title_rank."<br />";
  echo "pvp_kill_streak = ".$pvp_kill_streak."<br />";
  echo "pvp_total_kills = ".$pvp_total_kills."<br />";
  echo "pvp_last_killer = ".$pvp_last_killer."<br />";
  echo "pvp_city_kills = ".$pvp_city_kills."<br />";
  echo "pvp_wild_kills = ".$pvp_wild_kills."<br />";

  echo "</body></html>";

 ?>
