<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Content-type: application/json');

$arr = [3, 5, 1, 7, 9, 2, 4, 8, 6];
$start = hrtime(true);
foreach($arr as $el) {
    $el += 1;
}
$stop = hrtime(true);

$json = array(
  'start' => $start,
  'end' => $stop,
  'count' => $stop - $start
);


echo json_encode($json);
