<h1>работа со строками</h1>
<h2>Создание строк</h2>
<?php
$str1 = 'Hello';
$str2 = "world";
?>
<h2>Создание строками</h2>
<?php
echo  $str1 . ',' . $str2 . '!', '<br>' ;
echo "$str1 , $str2 !" , "<br>"; 
?>
<h2>Обращение к символу</h2>
<?php
echo $str1[0], ' - первый символ', '<br>';
$sym = $str2[2];
$str2[2] = 'Y';
echo $str2; 
?>
<h2>Длина строки</h2>
<?php 
$len = strlen($str1);
echo "Длина строки str1 - $len символов";
?>