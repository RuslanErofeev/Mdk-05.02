<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Многомернные массивы</h1>
<h2>Обьявление</h2>
<?php
$animals = [['кот', 'Собака'], ['Синица']];
?>
<h2>Вывод на экран</h2>
<?php 
foreach  ($animals as $group) {
    foreach ($group as $animal) {
        echo "<p>$animal </p>";
    }

}
?>
<h2>Ассциационные массивы</h2>
<?php
$animals =  ['Животные' => ['кот', 'Собака'], 'Птица' =>  ['Синица']];
foreach ($animals as $key => $group) {
    echo "<h3></h3>";
    foreach ($group as $animal) {
        echo "<p>$animal </p>";

    }

}
?>
<h2>Обращение к элемениу</h2>
<?php
$animals["Птица"][1];
?>
<h2>Ёще</h2>
<?php
$animals =  ['Животные' => ['кот', 'Собака'], 'Птица' =>  ['Синица']];
?>

</body>
</html>