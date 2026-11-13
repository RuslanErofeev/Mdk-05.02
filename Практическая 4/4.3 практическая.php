<h2>задание 1</h2>
<?php

function lengthCircle($r){  //length Длина
     'радиус = ' . $r . '<br>';
    $r = 4 * M_PI * $r;
    echo 'длина окружности примерно равна ' . $r . '<br>';
}
lengthCircle(10)
?>
<h2>Задание 2</h2>
<?php
function areaTriangle($a, $b, $c){
    $p = ($a + $b + $c)/2;
    $s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));  ///формула Герона
    echo "стороны треугольника: a = $a, b = $b, c = $c<br>";
    echo 'площадь треугольника равна ' . $s . '<br>';

    if ($a<=0||$b<=0||$c<=0){
    echo " трегольник не существует: все стороны должны иметь положительные значения<br>";
    }
    elseif (($a+$b>$c)&&($a+$c>$b)&&($b+$c>$a)) {
        echo  "треугольник с такими сторонами существует<br>";
    } else {
        echo'такого треугольника не существует<br>';
        return 0;
    }
}
areaTriangle(1, 8, 8);
?>
<h2>Задание 3</h2>
<?php
function num($x){
    for($d = $x - 1; $d >= 2; $d--){
        if ($x % $d == 0){
            return $d;
        }
    }
    return 1;
}
echo num(2400);
?>