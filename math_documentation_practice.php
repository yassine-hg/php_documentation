<?php
$initial = '555';

$a = octdec($initial);
echo $a , "\n";

$b = deg2rad($a);
echo $b . "\n";

$c = cos($b);
echo  $c . "\n";

$d = round($c , 3);
echo $d . "\n";

$e = log($d);
echo $e ."\n";

$f = abs($e);
echo $f ."\n";

$g = acos($f);
echo $g . "\n";

$h = rad2deg($g);
echo $h . "\n";

$i = floor($h);
echo $i . "\n";

$j = $i - 47;
echo $j;