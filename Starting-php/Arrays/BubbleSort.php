<?php
$numbers = [];
//Outputting Un-sorted array
echo "6 Random numbers before sorting algorithm:"; echo"<br>";
for($i = 0; $i < 7; $i++) {
    $n = rand(0, 150);
    array_push($numbers, $n);
}
foreach($numbers as $number) {
    echo "{$number} ";
}

//Outputting sorted array
echo "<br><br>";
echo "After Bubble sort: ";echo"<br>";
$arr = bubbleSort($numbers);

foreach($arr as $num) {
    echo "{$num} ";
}
//sorting function
function bubbleSort($arr) {
    $size = count($arr) - 1;
    for($i = 0; $i < $size; $i++) {
        for($k = 0; $k < $size - $i; $k++) {
            $j = $k+1;
            if($arr[$j] < $arr[$k]) {
                list($arr[$k],$arr[$j]) = array($arr[$j], $arr[$k]);
            }
        }
    }
    return $arr;
}
