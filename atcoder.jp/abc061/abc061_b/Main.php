<?php
$define = explode(' ', trim(fgets(STDIN)));
$cities = $define[0];
$routes = $define[1];

$ways = array();
for ($i=1; $i <= $cities; $i++) {
  $ways[$i] = 0;
}
for ($i=0; $i < $routes; $i++) {
  $tmp = explode(' ', trim(fgets(STDIN)));
  foreach ($tmp as $value) {
    $ways[$value]++;
  }
}
foreach ($ways as $count) {
  echo $count."\n";
}
