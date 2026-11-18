<h1>Прпактическая 5 задани 1</h1>

<?php

$text = "Hello (world of PHP) programming!";
$length = strlen($text);
$inside = false;

for ($i = 0; $i < $length; $i++) {
    if ($text[$i] === ')') {
        $inside = false;
    }

    if ($inside) {
        echo $text[$i];
    }

    if ($text[$i] === '(') {
        $inside = true;
    }
}
?>

<h2>номер 2</h2>
<?php

$text = "  Learning   PHP   without string functions is fun.";
$length = strlen($text); //ВЫзывание функции
$wordsCount = 0;
$inWord = false;

for ($i = 0; $i < $length; $i++) { // запускание цикла если меньше чем i +1

    if ($text[$i] === '.') { // явдяется ли цикл .
        break;
    }

    if ($text[$i] !== ' ') {
        if (!$inWord) {
            $wordsCount++;
            $inWord = true;
        }
    } else {
        $inWord = false;
    }
}

echo "Words count: " . $wordsCount;
