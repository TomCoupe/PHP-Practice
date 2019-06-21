<?php

$var1 = $_GET['firstnum'];
$var2 = $_GET['secondnum'];
$hcf = highestCommonFactor($var1, $var2);
$lcm = lowestCommonMultiple($var1, $var2);

echo "Highest Common Factor:".$hcf;
echo "<br>";
echo "Lowest Common Multiple:".$lcm;

function highestCommonFactor($a, $b) {
    if ($a == 0) {
        return $b;
    }
    if ($b == 0) {
        return $a;
    }
    if ($a == $b) {
        return $b;
    }
    if($a > $b) {
        return highestCommonFactor($a-$b, $b);
    }
    return highestCommonFactor($a, $b-$a);
}

function lowestCommonMultiple($a, $b) {
    return ($a*$b)/highestCommonFactor($a, $b);
}
