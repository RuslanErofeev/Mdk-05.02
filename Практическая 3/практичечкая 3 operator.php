//  ЗАДАЧА 1
<h1> Оператор выбора - Switch</h1>
<form action=""> 
<p>Введите число:</p>
<input name= "number">
<input type ="submit"  value = "Отправить">
</form>

<?php
if (isset($_GET[' number'])){

$a = 9;
switch ($a)  {

    case 0:
        echo "zero";
        break;
    case 1:
        echo "one";
        break;
    case 2:
        echo "a = two";
        break;
    case 3:
        echo "a = three";
        break;
    case 4:
        echo " a = four";
        break;
    case 5:
        echo "a  = five";
        break;
    case 6:
        echo "a = six";
        break;
    case 7:
        echo "a = seven";
        break;
    case 8:
        echo " a = eight";
        break;
    case 9:
        echo "a = nine";
        break;
    default:
        echo "Число не нашлось "; 
}

} else {
   echo 'Данные  не получены';
}
?>

// Задача 2 

