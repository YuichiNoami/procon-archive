<?php
$input = explode(' ', trim(fgets(STDIN)));
$stick_cnt = $input[0];
$connect_cnt = $input[1];
$sticks = explode(' ', trim(fgets(STDIN)));
rsort($sticks);
$answer = 0;
for ($i=0; $i < $connect_cnt; $i++) {
  $answer += $sticks[$i];
}
echo $answer."\n";
