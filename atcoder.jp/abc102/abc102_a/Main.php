<?php
//最大公約数
function gcd($m, $n){
    if($n > $m) list($m, $n) = array($n, $m);

    while($n !== 0){
        $tmp_n = $n;
        $n = $m % $n;
        $m = $tmp_n;
    }
    return $m;
}

//最小公倍数
function lcm($m, $n){
    return $m * $n / gcd($m, $n);
}

echo lcm(2, trim(fgets(STDIN)))."\n";
