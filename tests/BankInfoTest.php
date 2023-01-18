<?php

declare(strict_types=1);

namespace kak\BankInfo\tests;

use PHPUnit\Framework\TestCase;
use kak\BankInfo\BankInfo;

class BankInfoTest extends TestCase
{
    public function firstTest()
    {

        $result = BankInfo::getBinInfo('533669');
        $this->assertArrayHasKey('cardType', $result);
        $this->assertEquals([
            'cardType' => 'MasterCard',
            'name' => 'sberbank',
            'country' => 'ru',
            'title' => 'Сбербанк',
            'enTitle' => 'Sberbank',
            'url' => 'https://www.sberbank.ru',
            'color' => '#309c0b',
        ], $result);

    }
}