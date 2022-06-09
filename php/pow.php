<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Content-type: application/json');

$start = hrtime(true);
2 ** 8;
$stop = hrtime(true);

$json = array(
  'start' => $start,
  'end' => $stop,
  'count' => $stop - $start
);


echo json_encode($json);
