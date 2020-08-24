<?php
$nums = array_map('intval', explode(' ', trim(fgets(STDIN))));
echo "$nums[2] $nums[0] $nums[1]";