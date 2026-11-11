<h1>Фунция</h1>
<h2>Определение фунции и её вызова</h2>
<?php
function sayHello()
{
    echo '<p>Привет!</p>';
}

sayHello();
sayHello();
?>

<h2>Определение фунции и её вызова</h2>
<?php
function sayHello1($name)
{
    echo "<p>Привет, $name!</p>";
}
sayHello('Вася');
sayHello('Василий');
sayHello('Петя');
?>
<h2>Передача в фунцию</h2>
<?php
function printFullName($fName, $lName)
{
    echo "$fName $lName";
}
printFullName ('Ваня', 'Иванов');
?>
<h2>Функции с параметрами по умолчанию</h2>
<?php
function printUserInfo($fName, $lName, $role = 'use')
{
    echo "<p>$fName $lName, роль - $role</p>";
}
printUserInfo('Коля', 'Тванов', 'student');
printUserInfo('Вася','Петров');
?>
<h2>Значение возращаемое</h2>
<?php 
function getUseInfo($fName, $lName, $role = 'use')
{
    return "$fName $lName, роль - $role";
}
echo getUseInfo('Маша', 'Иванов');
echo $info
function squareRect($l, $w)
{
    return $l * $w;
}
echo '<p>Площадь - ' .  squareRect(20,5) . '</p>'