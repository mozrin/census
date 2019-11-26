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
        $html .= '<td>'.$value.'</td>';
      }
    }

    $html .= '</tr></tbody></table></div>';

    return $html;
  }

  function EQ2_GetWorld($worldid) {

    if ( $worldid > 99 && $worldid < 1000 ) {

      $query = 'http://'.'census.daybreakgames.com/s:mozrin/json/get/eq2/world?id='.$worldid;
      $result = json_decode(file_get_contents($query));
    }
    else { $result = '"Invalid World ID/n'; }

    return $result;
  }

  function EQ2_GetAllWorlds() {

    $returncode = array();

    $query = 'http://'.'census.daybreakgames.com/s:mozrin/json/get/eq2/world?c:limit=100';
    $result = json_decode(file_get_contents($query))->world_list;

    echo '$result = |'.$result.'|<br />';

    return $result;
  }

  ?>
