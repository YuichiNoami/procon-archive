<?php
$input = explode(' ', trim(fgets(STDIN)));
if ($input[2] >= $input[0] && $input[2] <= $input[1]) {
  echo "Yes\n";
} else {
  echo "No\n";
}
