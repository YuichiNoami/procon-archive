<?php
$input = explode(' ', trim(fgets(STDIN)));
list($X, $A, $B) = array($input[0], $input[1], $input[2]);

$result = $B - $A;
if ($result < 1) {
  echo "delicious\n";
} elseif ($result >= $X + 1) {
  echo "dangerous\n";
} else {
  echo "safe\n";
}
