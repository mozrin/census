<?php

  include_once 'api/objects/world.php';

  include_once "header.php";

  echo "<body>";
    include_once "menu.php";
    include $_GET['page'].".php";
    include_once "footer.php";
  echo "</body></html>";

?>
