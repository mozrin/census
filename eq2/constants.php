<?php

  // EQ2 constants

  define('DEFAULT_EQ2_CHARACTER_ID', '502511604703');
  define('DEFAULT_EQ2_GUILD_ID', '1465558838');
  define('DEFAULT_EQ2_CONSTANT', 'race');

  $EQ2_CENSUS = 'http:'.'//census.daybreakgames.com/s:mozrin/json/get/eq2';

  DEBUG_StampIt('Before Cenus Query');

  $constants = json_decode(file_get_contents($EQ2_CENSUS.'/constants'))->constants_list[0];

  DEBUG_StampIt('After Cenus Query');

  $EQ2_MINADVENTURELEVEL= $constants->minadventurelevel;
  $EQ2_RACE = $constants->race_list;
  $EQ2_GENERALSPELLPROPERTY = $constants->generalspellproperty_list;
  $EQ2_EQUIPMENTSLOT = $constants->equipmentslot_list;
  $EQ2_ATTRIBUTE = $constants->attribute_list;
  $EQ2_MINGUILDLEVEL = $constants->minguildlevel;
  $EQ2_ADVENTURECLASS = $constants->adventureclass_list;
  $EQ2_TRADESKILLPROPERTY = $constants->tradeskillproperty_list;
  $EQ2_SKILL = $constants->skill_list;
  $EQ2_SECONDARYTRADESKILLCLASS = $constants->secondarytradeskillclass_list;
  $EQ2_MAXGUILDLEVEL = $constants->maxguildlevel;
  $EQ2_PETKEY = $constants->petkey_list;
  $EQ2_MAXTRADESKILLLEVEL = $constants->maxtradeskilllevel;
  $EQ2_ALIGNMENT = $constants->alignment_list;
  $EQ2_MAXADVENTURELEVEL = $constants->maxadventurelevel;
  $EQ2_SPELLTIER = $constants->spelltier_list;
  $EQ2_REFORGINGCONSTANTS = $constants->reforging_constants_list;
  $EQ2_TRADESKILLCLASS = $constants->tradeskillclass_list;
  $EQ2_LANGUAGE = $constants->language_list;
  $EQ2_MINTRADESKILLLEVEL = $constants->mintradeskilllevel;

  $EQ2_WORLDS = json_decode(file_get_contents($EQ2_CENSUS.'/world?c:limit=100'))->world_list;

  DEBUG_StampIt('After Cenus Parse');

?>
