<?php
for ($i = 0; $i < 100; $i++) {
  $tmp = trim(fgets(STDIN));
}
echo 1000;
echo "\n";
for ($i=0; $i < 1000; $i++) {
  $x = mt_rand() % 100;
  $y = mt_rand() % 100;
  $h = mt_rand() % 100 + 1;
  echo $x.' '.$y.' '.$h."\n";
}
