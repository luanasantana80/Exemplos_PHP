<?php 

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$delta = ($b * $b) - ((4 * $a) * $c);

$cal = (-$b + sqrt($delta)) / (2 * $a);
$cal2 = (-$b - sqrt($delta)) / (2 * $a);

if ($cal != "NAN" and $cal2 != "NAN") {

echo "X= " . $cal . "<br ?-->";
echo "X = " . $cal2;

} else {
echo "ERRO";
}
?>