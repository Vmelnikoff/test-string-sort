<?php

namespace Tests\Service;

use App\Service\StringSorter;
use PHPUnit\Framework\TestCase;

class StringSorterTest extends TestCase
{
    /**
     * @dataProvider dataForSort
     *
     * @param string $actualSting
     * @param string $expectedString
     */
    public function testLettersInWordsSort(string $actualSting, string $expectedString)
    {
        $stringSorter = new StringSorter();

        $this->assertSame($expectedString, $stringSorter->lettersInWordsSort($actualSting));
    }

    public function testWrongSort()
    {
        $stringSorter = new StringSorter();

        $wrongExpectedString = 'вба';

        $this->assertNotSame($wrongExpectedString, $stringSorter->lettersInWordsSort('бав'));
    }

    public function dataForSort(): array
    {
        return [
            ['лимон апельсин банан яблоко', 'илмно аеилнпсь аабнн бклооя'],
            ['lemon orange banana apple', 'elmno aegnor aaabnn aelpp'],
            ['αβγαβγ αβγαβγαβγ', 'ααββγγ αααβββγγγ'],
        ];
    }
}
