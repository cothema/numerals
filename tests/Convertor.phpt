<?php

namespace Cothema\OpeningHours\Test;

use Cothema\Numerals\Convertor as Tested;
use Tester\Assert;

require_once __DIR__ . '/bootstrap.php';

class Convertor extends \Tester\TestCase {

    private function getArabicToRomanExamples() {
        return [
            '2' => 'II',
            '50' => 'L',
            '99' => 'XCIX',
            '666' => 'DCLXVI',
            '1666' => 'MDCLXVI',
            '3000' => 'MMM'
        ];
    }

    private function getArabicToMongolianExamples() {
        return [
            '0' => '᠐',
            '5' => '᠕',
            '99' => '᠙᠙'
        ];
    }

    public function testCaseArabicRoman() {
        $this->iterateExamplesArrayInBothWays($this->getArabicToRomanExamples(), 'Arabic', 'Roman');
    }

    public function testCaseArabicToMongolian() {
        $this->iterateExamplesArrayInBothWays($this->getArabicToMongolianExamples(), 'Arabic', 'Mongolian');
    }

    /**
     *
     * @param array $array
     * @param string $name1
     * @param string $name2
     */
    private function iterateExamplesArrayInBothWays(array $array, $name1, $name2) {
        $this->iterateExamplesArray($array, $name1, $name2);
        $this->iterateExamplesArray(array_flip($array), $name2, $name1);
    }

    /**
     *
     * @param array $array
     * @param string $fromName
     * @param string $toName
     */
    private function iterateExamplesArray(array $array, $fromName, $toName) {
        foreach ($array as $from => $to) {
            Assert::same((string) $to, (new Tested($from, $fromName))->convert($toName)->output);
        }
    }

}

(new Convertor)->run();
