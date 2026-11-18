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
?>

<h2>Задание 3</h2>
<?php

$text = "Получили стипендию и купили что-то полезное!";

// 1. Извлекаем все слова из строк
preg_match_all('/[а-яёa-z]+/iu', $text, $matches);
$words = $matches[0];

echo "Исходная строка: $text\n\n";
echo "Найденные слова:\n";

// Перебираем каждое слово
foreach ($words as $word) {
    //  'А' и 'а' считались одинаковыми
    $lowerWord = mb_strtolower($word, 'UTF-8');
    
    // Получаем длину слова
    $length = mb_strlen($lowerWord, 'UTF-8');
    
    // Берем первую и последнюю буквы
    $firstChar = mb_substr($lowerWord, 0, 1, 'UTF-8');
    $lastChar = mb_substr($lowerWord, -1, 1, 'UTF-8');
    
    // Сравниваем (если слово из 1 буквы подойдет; если нет — добавьте $length > 1)
    if ($firstChar === $lastChar) {
        echo $word . "\n";
    }
}
?>
