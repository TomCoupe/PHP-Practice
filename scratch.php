<?php
$a = $_GET['firstnum'];
$b = $_GET['secondnum'];
$factorial = $_GET['factorialVal'];

echo "Sum: ",$a + $b,"<br>";
checkAge($a, $b);
print_r("<br>Factorial value: " .factorialValue($factorial));

//do not need to declare datatype in function parameters
function checkAge($num1, $num2) {
    $counter = 0;
    if($num1 <= $num2) {
        for($num1; $num1 < $num2; $num1++) {
            $counter++;
        }
        echo "Difference between first number and second is: ", $counter;
    }
    else if($num1 >= $num2) {
        for($num2; $num2 < $num1; $num2++){
            $counter++;
        }
        echo "Difference between first number and second is: ", $counter;
    }
}
//function recurs and returns the factorial value for value input via parameters
function factorialValue($n) {
    if($n == 0) {
        return 1;
    }
    else {
        return $n*factorialValue($n - 1);
    }
}
?>

