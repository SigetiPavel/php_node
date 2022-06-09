<?php 

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Content-type: application/json');

$arr = [3, 5, 1, 7, 9, 2, 4, 10, 8, 6];

$start = hrtime(true);
sort($arr);
$stop = hrtime(true);

$json = array(
  'start' => $start,
  'end' => $stop,
  'count' => $stop - $start,
  'res' => $arr,
);


echo json_encode($json);
