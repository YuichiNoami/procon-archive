<?php
fscanf(STDIN, '%d %d %d', $height, $width, $remain);
$blacks = [];
$answer = 0;
for ($i = 0; $i < $height; $i++) {
    fscanf(STDIN, '%s', $line);
    $tmp = str_split($line);
    $bools = [];
    foreach ($tmp as $value) {
        $bools[] = $value === '#';
    }
    $blacks[] = $bools;
}

for ($maskR = 0; $maskR < (1 << $height); $maskR++) {
    for ($maskC=0; $maskC < (1 << $width); $maskC++) { 
        $cnt = 0;
        for ($i = 0; $i < $height; $i++) {
            for ($j = 0; $j < $width; $j++) {
                if ((($maskR >> $i) & 1) === 0 && (($maskC >> $j) & 1) === 0 && $blacks[$i][$j] === true) {
                    $cnt++;
                }
            }
        }
        if ($cnt === $remain) {
            $answer++;
        }
    }
}
echo $answer;
