<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Content-type: application/json');

function factorial($n) {
  return ($n != 1) ? $n * factorial($n - 1) : 1;
}

$start = hrtime(true);
factorial(18);
$stop = hrtime(true);

$json = array(
  'start' => $start,
  'end' => $stop,
  'count' => $stop - $start
);


echo json_encode($json);
