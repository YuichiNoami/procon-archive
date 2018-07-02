<?php
$len = intval(trim(fgets(STDIN)));
$nums = explode(' ', trim(fgets(STDIN)));
$sads = [];
for ($i=0; $i < $len; $i++) {
  $sads[] = $nums[$i] - $i + 1;
}

$tar = median($sads);

$ans = 0;
for ($i=0; $i < $len; $i++) {
  $ans += abs($sads[$i] - $tar);
}

echo $ans."\n";

function median(array $values){
	sort($values);
	if (count($values) % 2 == 0){
		return (($values[(count($values)/2)-1]+$values[((count($values)/2))])/2);
	}else{
		return ($values[floor(count($values)/2)]);
	}
}
