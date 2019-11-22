<?php

  include_once '../objects/world.php';

  echo '<html>';
  include "../../header.php";
  echo '<body>';
  include "../../menu.php";
  echo '<div>';

  // header("Access-Control-Allow-Origin: *");
  // header("Content-Type: application/json; charset=UTF-8");

  $testing = new World('34534');

  $rc = $testing->Count();

  echo $rc;

  echo '</div></body></html>'
?>
