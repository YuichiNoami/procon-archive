<?php
$answer_count = 0;
$stops = explode(' ', trim(fgets(STDIN)));
$stop_day = '2018-'.$stops[0].'-'.$stops[1];
$stop_day = date('Y-n-j', strtotime($stop_day.' +1 day'));
$today = '2018-1-1';
while ($today != $stop_day) {
  $day_parts = explode('-', $today);
  if ($day_parts[1] == $day_parts[2]) {
    $answer_count++;
  }
  $today = date('Y-n-j', strtotime($today.' +1 day'));
}
echo $answer_count."\n";
