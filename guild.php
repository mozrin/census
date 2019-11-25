<?php

  $id = (($_GET['id'] == '') ? DEFAULT_EQ2_GUILD_ID : $_GET['id']);

  $guild_data = json_decode(file_get_contents('http://census.daybreakgames.com/s:mozrin/json/get/eq2/guild/'.$id));
  $guild_ranks = $guild_data->rank_list;


  $member_data = json_decode(file_get_contents('http://census.daybreakgames.com/s:mozrin/json/get/eq2/character?guild.id='.$id));
  $member_type = $memberdata.character_list;

  echoD('$id', $guild_data->guild_list[0]->id);


  $type_classid = $parsed->character_list[0]->type->classid;

  /* $type_classid = $parsed->character_list[0]->type->classid;
  $type_aa_level = $parsed->character_list[0]->type->aa_level;
  $type_ts_level = $parsed->character_list[0]->type->ts_level;
  $type_raceid = $parsed->character_list[0]->type->raceid;
  $type_level = $parsed->character_list[0]->type->level;
  $type_gender = $parsed->character_list[0]->type->gender;
  $type_ts_class = $parsed->character_list[0]->type->ts_class;
  $type_birthdate_utc = $parsed->character_list[0]->type->birthdate_utc;
  $type_race = $parsed->character_list[0]->type->race;
  $type_deity = $parsed->character_list[0]->type->deity;
  $type_class = $parsed->character_list[0]->type->class;
  $type_alignment = $parsed->character_list[0]->type->alignment;

  echo "type_classid = ".$type_classid."<br />";
  echo "type_aa_level = ".$type_aa_level."<br />";
  echo "type_ts_level = ".$type_ts_level."<br />";
  echo "type_raceid = ".$type_raceid."<br />";
  echo "type_level = ".$type_level."<br />";
  echo "type_gender = ".$type_gender."<br />";
  echo "type_ts_class = ".$type_ts_class."<br />";
  echo "type_birthdate_utc = ".date('m/d/Y',$type_birthdate_utc)."<br />";
  echo "type_race = ".$type_race."<br />";
  echo "type_deity = ".$type_deity."<br />";
  echo "type_race = ".$type_race."<br />";
  echo "type_class = ".$type_class."<br />";
  echo "type_alignment = ".$type_alignment."<br />"; */

  echo '

  <div class="container">
    <div class="row">
      <div class="col">
        1 of 2
      </div>
      <div class="col">
        2 of 2
      </div>
    </div>
    <div class="row">
      <div class="col">
        1 of 3
      </div>
      <div class="col">
        2 of 3
      </div>
      <div class="col">
        3 of 3
      </div>
    </div>
  </div>

  ';

?>
