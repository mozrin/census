<?php

  echo '<code>'.json_encode($EQ2_RACE).'</code>';
  echo '<br /><br />';

  echo '<code>'.json_encode($EQ2_RACE[0]).'</code>';
  echo '<br /><br />';

  echo '<code>'.count($EQ2_RACE[4]).'</code>';
  echo '<br /><br />';

  echo '<code>'.count($EQ2_RACE).'</code>';
  echo '<br /><br />';

  foreach ($EQ2_RACE[1] as $value) { echo '<code>'.$value.'</code><br />'; }
  echo '<br /><br />';

  foreach ($EQ2_RACE[0] as $key => $value) { echo '<code>'.$key.' => '.$value.'</code><br />'; }
  echo '<br /><br />';

  $timestamp=1333699439.12;
  echo gmdate("Y-m-d H:i:s", $timestamp);
  echo '<br /><br />';

?>

?>
