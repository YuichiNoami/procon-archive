<?php
$str = trim(fgets(STDIN));
$len = strlen($str);
echo $str[0].($len-2).substr($str, -1)."\n";
