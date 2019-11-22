<?php

  include_once '../objects/world.php';

  //echo '<html>';
  // include "../../header.php";
  // echo '<body>';
  // include "../../menu.php";
  // echo '<div>';

  // header("Access-Control-Allow-Origin: *");
  // header("Content-Type: application/json; charset=UTF-8");

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

  // var_dump(get_object_vars($testing));

  // echo '|'.$testing->test.'|<br />';

  // echo '|count()='.$testing->count().'|';
  // echo '<br />----------------------------------------------------------------------------------------------------------------------------<br />';
  // echo json_encode($testing);
  // echo '<br />----------------------------------------------------------------------------------------------------------------------------<br />';

  //print_r($testing->{'world_list'}->{'0'});


  //echo $testing->count();

  // echo '</div></body></html>'

/*
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>*/


?>
