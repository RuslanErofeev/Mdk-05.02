<h2>задание 1</h2>
<?php
function length($r){
    echo 'радиус = ' . $r . '<br>';
    $r = 4 * M_PI * $r;
    echo 'длина окружности примерно равна ' . $r . '<br>';
}
length(10)
?>
<h2>Задание 2</h2>
<?php
function area($a, $b, $c){
    $p = ($a + $b + $c)/2;
    $s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c)); //формула Герона
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
area(1, 8, 8);
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
<h2>Задание 4</h2>
<?php
function getall($n){
    $d=[];
    if ($n <= 0) return $d;
    for ($i = 1; $i * $i <= $n; $i++){
        if ($n % $i == 0){
            $d[] = $i;
            if($i != $n/$i){
                $d[] = $n/$i;
            }
        }
    }
    return $d;
}
getall(9);
?>
<h2> Задание 5</h2>