<h1> Оператор выбора - Switch</h1>
<form action=""> 
<p>Введите число:</p>
<input name= "number">
<input type="submit"  value= "Отправить">
</form>

<?php
if (isset($_GET[' number'])){

$a = 5;
switch ($a)  {
    case 1:
        echo 'a = 1';
        break;
    case 2:
        echo 'a = 2';
        break;
    case 3:
        echo 'a = 3';
        break;
     case 4:
        echo 'a = 4';
        break;
     case 5:
        echo 'a = 5';
        break;
    default;
        echo 'Число не нашлось';
}

} else {
   echo 'Данные  не получены';
}


?>
