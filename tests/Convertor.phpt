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

    public function testCaseArabicToRoman() {
        foreach ($this->getArabicToRomanExamples() as $arabic => $roman) {
            Assert::same((string) $roman, (string) (new Tested($arabic, 'Arabic'))->convert('Roman'));
        }
    }

    public function testCaseRomanToArabic() {
        foreach ($this->getArabicToRomanExamples() as $arabic => $roman) {
            Assert::same((string) $arabic, (string) (new Tested($roman, 'Roman'))->convert('Arabic'));
        }
    }

}

(new Convertor)->run();
