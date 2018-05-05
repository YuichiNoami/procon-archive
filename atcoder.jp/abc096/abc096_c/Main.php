<?php
$input = explode(' ', trim(fgets(STDIN)));
$x_cnt = $input[0];
$y_cnt = $input[1];
$table = [];
$is_can = true;
for ($i=1; $i <= $y_cnt; $i++) {
  $tmp_arr = str_split(trim(fgets(STDIN)));
  foreach ($tmp_arr as $key => $value) {
    $table[$i][$key+1] = $value;
  }
}
for ($i=1; $i <= $y_cnt; $i++) {
  for ($j=1; $j <= $x_cnt; $j++) {
    if ($table[$i][$j] == '#' && checkBlackGrid($i, $j+1) && checkBlackGrid($i, $j-1) && checkBlackGrid($i+1, $j) && checkBlackGrid($i-1, $j)) {
      $is_can = false;
    }
  }
}
echo ($is_can ? 'Yes' : 'No')."\n";

function checkBlackGrid($x, $y) {
  global $table;
  return isset($table[$x][$y]) && $table[$x][$y] != '#';
}
