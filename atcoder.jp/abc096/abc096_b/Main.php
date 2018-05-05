<?php
$nums = explode(' ', trim(fgets(STDIN)));
$step = trim(fgets(STDIN));
for ($i=0; $i < $step; $i++) {
  $max = max($nums);
  $key = array_keys($nums, $max);
  $nums[$key[0]] *= 2;
}
echo array_sum($nums)."\n";
