<?php

include __DIR__ . '/../vendor/autoload.php';

use kak\BankInfo\BankInfo;


$bank = new BankInfo();

$file = __DIR__ . '/../README.md';
$content = file_get_contents($file);


$cardTypes = BankInfo::getCardTypes();
$cardTypeCount = count($cardTypes);
natcasesort($cardTypes);
$cardTypeList = implode(', ', $cardTypes);

$contentCardType = "##### List of card types($cardTypeCount):\n\n<details>\n<summary>Show details</summary>\n\n $cardTypeList\n</details>";
$content = preg_replace("~(^#{5} List of card types ?(?:.*?)</details>)~ims", $contentCardType, $content, 1);

$banks = BankInfo::getBanks();
$bankCount = count($banks);
$banksUniques = [];
foreach ($banks as $bank) {
    $banksUniques[] = sprintf('%s (%s)', $bank['enTitle'], $bank['country']);
}
$banksUniques = array_unique($banksUniques);
natcasesort($banksUniques);
$bankList = implode(', ', $banksUniques);
$contentBanks = "##### List of banks($bankCount):\n\n<details>\n<summary>Show details</summary>\n\n $bankList\n</details>";
$content = preg_replace("~(^#{5} List of banks ?(?:.*?)</details>)~ims", $contentBanks, $content, 1);

file_put_contents($file, $content);
