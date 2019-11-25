<?php

  stampIt('Globals - Begin');

  define('DEFAULT_PAGE', 'pickone');

  // EQ2 Variables

  $race_json = file_get_contents('http://census.daybreakgames.com/s:mozrin/json/get/eq2/constants?c:show=race_list');
  $EQ2_RACE = json_decode($race_json)->constants_list[0]->race_list;

  stampIt('Globals - End');

?>
