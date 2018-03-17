<?php
$N = intval(trim(fgets(STDIN)));
$plus_strs = [];
for ($i=0; $i < $N; $i++) {
  $tmp_str = trim(fgets(STDIN));
  $plus_strs[] = $tmp_str;
}

$M = intval(trim(fgets(STDIN)));
$minus_strs = [];
for ($i=0; $i < $M; $i++) {
  $tmp_str = trim(fgets(STDIN));
  $minus_strs[] = $tmp_str;
}

$plus_cnts = array_count_values($plus_strs);
$minus_cnts = array_count_values($minus_strs);

$max = 0;
foreach ($plus_cnts as $key => $value) {
  if (isset($minus_cnts[$key])) {
    $value -= $minus_cnts[$key];
  }
  if ($value > $max) {
    $max = $value;
  }
}

echo $max."\n";
