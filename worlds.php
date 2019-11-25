<?php

  $headers = array( 'Status', 'Name', 'Language', 'Time Stamp', 'Last Update', 'Lower Case Name', 'ID' );

  echo EQ2_DisplayTableData($EQ2_WORLDS,'EQ2 Constants - Worlds','This is a list of all the current worlds in the EQ2 game.', $headers);

?>
