<?php

$arr = Array
(
    [0] => stdClass Object
        (
            [sm_id] => 1
            [c_id] => 1
        )
    [1] => stdClass Object
        (
            [sm_id] => 1
            [c_id] => 2

        )
);

foreach($arr as $key=>$value){
  echo $value->sm_id;
}

?>
