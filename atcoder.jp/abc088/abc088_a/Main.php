<?php
$goal = intval(trim(fgets(STDIN)));
$one = intval(trim(fgets(STDIN)));
if ($goal % 500 > $one) {
  echo 'No';
} else {
  echo 'Yes';
}
echo "\n";
