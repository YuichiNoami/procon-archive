<?php
$input = explode(' ', trim(fgets(STDIN)));
$num = intval($input[0]);
$order = intval($input[1]);
$array = array();

for ($i=0; $i < $num; $i++) {
  $tmp = explode(' ', trim(fgets(STDIN)));
  $in = intval($tmp[0]);
  $loop = intval($tmp[1]);
  if (isset($array[$in])) {
    $array[$in] += $loop;
  } else {
    $array[$in] = $loop;
  }
}

ksort($array);
foreach ($array as $key => $value) {
  if ($value >= $order) {
    echo $key."\n";
    break;
  } else {
    $order -= $value;
  }
}
