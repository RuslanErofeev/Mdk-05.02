<h1> Ассциация массивы</h1>
<h2>Создание массива</h2>
<?php 
$numbers = ['one' => 1, 'two'=>  2, 'three' => 3,  'four' => 4, 'five' => 5];
?>
<h2>Вывод на экран</h2>
<?php 
foreach ($numbers as $number) {
    echo $number, ',';
    }
?>
<h2>Обращение к элемнты</h2>
<?php
echo $numbers['two'];
$numbers['two'] = '2';
?>
<h2>Добавоение элемента (Создание)</h2>
<?php
$numbers['seven'] = 7;
$numbers[] = 8;
$numbers[6] = 6;             
$numbers[] = 22;
?>

<h2>Вывод вместе с ключами</h2>
<?php
foreach  ($numbers  as $key => $valua) {
    echo "$key - $valua <br";
}
?>
<h2>Строка</h2>
<?php
$str = 'qwerty';
echo $str[3], '<br>';
$str[3] =  'w';
$len = strlen($str);
echo 'Длина строки $str - $len Символав';


?>