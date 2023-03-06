<?php

declare(strict_types=1);

namespace kak\BankInfo\tests;

use PHPUnit\Framework\TestCase;
use kak\BankInfo\BankInfo;

class BankInfoTest extends TestCase
{
    public function testGetBinInfo()
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

    public function testSearch()
    {
        $name = 'PUBLIC JOINT-STOCK COMPANY BANK OTKRITIE FINANCIAL CORPORATION';
        $result = BankInfo::search($name, BankInfo::COUNTRY_RU);
        $this->assertEquals([
            'name' => 'openbank',
            'country' => 'ru',
            'title' => 'Банк Открытие',
            'enTitle' => 'Bank Otkritie',
            'url' => 'https://open.ru',
            'color' => '#00b4e3',
        ], $result);

        $name = 'JOINT STOCK COMPANY ALFA-BANK';
        $result = BankInfo::search($name, BankInfo::COUNTRY_RU);
        $this->assertEquals([
           'name' => 'alfabank',
           'country' => 'ru',
           'title' => 'Альфа-Банк',
           'enTitle' => 'Alfa-Bank',
           'url' => 'https://alfabank.ru/',
           'color' => '#f22f17',
        ], $result);
    }

}