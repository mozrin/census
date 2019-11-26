<?php

  define('DEBUG', false);

  function echoD($variable_name, $variable_data) { if (debug) { echo 'DEBUG: ('.$variable_name.') = |'.$variable_data.'|'; } return; }

  function DEBUG_StampIt($str) {

     if (DEBUG) {

       $micro_date = microtime();
       $date_array = explode(" ", $micro_date);
       $date = date("Y-m-d H:i:s", $date_array[1]);
       echo $date.':'.$date_array[0].' = '.$str.'<br />';
     }

     return;
   }

?>
