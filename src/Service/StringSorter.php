<?php declare(strict_types=1);

namespace App\Service;

class StringSorter
{
    public function lettersInWordsSort(string $string): string
    {
        $arr = explode(' ', $string);

        foreach ($arr as $key => $value) {
            $value = preg_split('##u', $value, 0, PREG_SPLIT_NO_EMPTY);
            sort($value);
            $value = implode($value);
            $arr[$key] = $value;
        }

        return implode(' ', $arr);
    }
}
