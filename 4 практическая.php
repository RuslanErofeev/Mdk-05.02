<?Php
// Ввод чисел с клавиатуры (для CLI-среды)
$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));

// Преобразуем ввод в числа (на случай, если пользователь введёт текст)
$a = (float)$a;
$b = (float)$b;

if ($a < $b) {
 echo $a + $b;
} else {
 echo $a * $b;
}
?>