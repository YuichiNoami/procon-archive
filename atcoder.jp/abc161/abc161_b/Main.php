<?php
fscanf(STDIN, '%d %d', $type, $cnt);
$nums = array_map('intval', explode(' ', trim(fgets(STDIN))));
rsort($nums);
$max = $nums[0];
$sum = array_sum($nums);
$list = [];
for ($i=0; $i < $type; $i++) { 
    if ($nums[$i] >= $sum / (4 *$cnt)) {
        $list[] = $nums[$i];
        unset($nums[$i]);
    }
}
echo count($list) >= $cnt ? 'Yes' : 'No';