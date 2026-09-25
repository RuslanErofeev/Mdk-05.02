<h1>Практическая работа</h1>
<?php
$a = 5;
$b = 4;
$c = 2;
$d = 4;

$result = (($a / $c) * ($b / $d)) - (($a * $b - $c) / ($c * $d));

echo "a = $a";
echo "b = $b";
echo "c = $c";
echo "d = $d";
echo "Результат = " . $result;
?>

<h2>Практическая работа 2</h2>
<?php
$x = 4;
$y = 2;

$formula2 = (($x + $y) / ($y + 1)) - (($x * $y - 12) / (34 + $x));

echo "x = $x";
echo "y = $y";
echo "Результат = " . $formula2;
?>

<h3>Практическая 3</h3>
<?php
$x = 4;
$y = 5;

$formula1 = pow(($x + 1) / ($x - 1), $x) + (18 * $x * pow($y, 2));

echo "x = $x";
echo "y = $y";
echo "Результат = " . $formula1;
?>

<h4>Практическая 4</h4>
<?php
$x = 6;
$y = 9;

$formula3 = pow(1 + (1 / pow($x, 2)), $x) - (12 * pow($x, 2) * $y);

echo "x = $x";
echo "y = $y";
echo "Результат = " . $formula3;
?>


