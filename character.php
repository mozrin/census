<?php

  $id = (($_GET['id'] == '') ? DEFAULT_EQ2_CHARACTER_ID : $_GET['id']);

  $json = file_get_contents('http://census.daybreakgames.com/s:mozrin/json/get/eq2/character/'.$id);

  $parsed = json_decode($json)->character_list[0];

  echo "firstname = ".$parsed->name->first."<br />";
  echo "type_classid = ".$parsed->type->classid."<br />";
  echo "type_aa_level = ".$parsed->type->aa_level."<br />";
  echo "type_ts_level = ".$parsed->type->ts_level."<br />";
  echo "type_race_id = ".$parsed->type->raceid."<br />";
  echo "type_race_global = ".$EQ2_RACE[$parsed->type->raceid]->displayname."<br />";
  echo "type_race = ".$parsed->type->race."<br />";
  echo "type_level = ".$parsed->type->level."<br />";
  echo "type_gender = ".$parsed->type->gender."<br />";
  echo "type_ts_class = ".$parsed->type->ts_class."<br />";
  echo "type_birthdate_utc = ".date('m/d/Y',$parsed->type->birthdate_utc)."<br />";
  echo "type_deity = ".$parsed->type->deity."<br />";
  echo "type_class = ".$parsed->type->class."<br />";
  echo "type_alignment = ".$parsed->type->alignment."<br />";
?>
