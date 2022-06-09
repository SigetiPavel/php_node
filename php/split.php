<?php 
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Content-type: application/json');

$str = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam ducimus molestiae temporibus assumenda.';

$start = hrtime(true);
explode('e', $str);
$stop = hrtime(true);

$json = array(
  'start' => $start,
  'end' => $stop,
  'count' => $stop - $start
);


echo json_encode($json);

