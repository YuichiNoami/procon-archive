<?php
$length = trim(fgets(STDIN));
$chars = trim(fgets(STDIN));
$count = substr_count($chars, 'E');
$answer = $count;
for ($i=0; $i < $length; $i++) {
    if ($chars[$i] === 'E') {
        $count--;
    } elseif ($chars[$i] === 'W') {
        $count++;
    }
    $answer = min($count, $answer);
}
echo $answer."\n";
