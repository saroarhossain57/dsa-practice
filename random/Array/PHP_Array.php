<?php

$startMemory = memory_get_usage();
$array = range(1,100000);
$endMemory = memory_get_usage();
echo ($endMemory - $startMemory)." bytes";