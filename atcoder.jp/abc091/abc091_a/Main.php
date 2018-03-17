<?php
$input = explode(' ', trim(fgets(STDIN)));
$coin_a = $input[0];
$coin_b = $input[1];
$target = $input[2];
if ($coin_a + $coin_b >= $target) {
  echo "Yes\n";
} else {
  echo "No\n";
}
