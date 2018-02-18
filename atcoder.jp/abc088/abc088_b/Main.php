<?php
$sheets_cnt = intval(trim(fgets(STDIN)));
$nums = explode(' ', trim(fgets(STDIN)));
rsort($nums);
$answer = 0;
for ($i=0; $i < $sheets_cnt; $i++) {
  if ($i % 2 == 0) {
    $answer += $nums[$i];
  } else {
    $answer -= $nums[$i];
  }
}
echo $answer."\n";
