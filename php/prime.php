<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Content-type: application/json');

function isPrime($n) {
  for($i = 2; $i < $n; $i++)
    if($n % $i === 0) return false;
  return $n > 1;
}

function countPrime($n) {
  $counter = 0;
  for($i = 1; $i <= $n; $i++) {
    if(isPrime($i)) {
      $counter++;
    }
  }
  return $counter;
}

$start = hrtime(true);
countPrime(50);
$stop = hrtime(true);

$json = array(
  'start' => $start,
  'end' => $stop,
  'count' => $stop - $start
);


echo json_encode($json);
