<?php
$len = intval(trim(fgets(STDIN)));
$nums = explode(' ', trim(fgets(STDIN)));
echo max($nums) - min ($nums)."\n";
