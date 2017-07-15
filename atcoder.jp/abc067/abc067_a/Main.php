<?php
$input = explode(' ', trim(fgets(STDIN)));
$number = array_sum($input);

if ($number % 3 == 0 || $input[0] % 3 == 0 || $input[1] % 3 == 0) {
  echo "Possible\n";
} else {
  echo "Impossible\n";
}
