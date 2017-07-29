<?php
$max = trim(fgets(STDIN));
if ($max == 1) {
  echo $max."\n";
} else {
  for ($i=$max; $i >= 2; $i--) {
    if  (($i & ($i - 1)) == 0) {
      echo $i."\n";
      break;
    }
  }
}
