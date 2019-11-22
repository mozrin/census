<?php

  function EQ2_GetWorldData() {

    $query = 'http://'.'census.daybreakgames.com/s:mozrin/json/get/eq2/world?c:limit=100';

    $result = file_get_contents($query);

    return $result;
  }

  class World {

    public $id;
    public $name;
    public $language;
    public $ts;
    public $last_update;
    public $name_lower;
    public $raw;

    public function __construct($json = false) {
        if ($json) $this->set(json_decode($json, true));
    }
  }

  class Worlds {

    public $id;
    public $world as World;

  }

?>
