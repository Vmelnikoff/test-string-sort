<?php declare(strict_types=1);

require __DIR__.'/../vendor/autoload.php';

$stringSorter = new \App\Service\StringSorter();

$strings = [
    'лимон апельсин банан яблоко',
    'lemon orange banana apple',
    'αβγαβγ αβγαβγαβγ',
];

foreach ($strings as $string) {
    echo 'Исходная строка: ' . $string
        . ' ---> Отсортированная строка: ' . $stringSorter->lettersInWordsSort($string)
        . PHP_EOL;
}
