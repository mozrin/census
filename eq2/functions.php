<?php

  function EQ2_DisplayTableData($array, $header, $description, $headers) {

    // Need to put an default for headers in here in case it is not passed.

    $html = '';

    $html .= '<div class="container"><h2>'.$header.'</h2><p>'.$description.'</p>';
    $html .= '<table class="table"><thead><tr>';

    foreach ($headers as $value) {
      $html .= '<th>'.$value.'</th>';
    }

    $html .= '</thead><tbody>';

    for ( $i=0; $i<count($array); $i++) {

      $html .= '<tr>';

      foreach ($array[$i] as $key => $value) {
        if (isValidTimeStamp($value)) { $html .= '<td>'.gmdate("Y-m-d", $value).'</td>'; }
        else { $html .= '<td>'.$value.'</td>'; }
      }
    }

    $html .= '</tr></tbody></table></div>';

    return $html;
  }

  function isValidTimeStamp($timeStamp) {

    $intTimeStamp = (string) intval($timeStamp);

    return  ( strlen($intTimeStamp) == 10 )
            && ($intTimeStamp <= PHP_INT_MAX)
            && ($intTimeStamp >= ~PHP_INT_MAX);
  }

?>
