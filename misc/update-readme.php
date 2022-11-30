<?php

include __DIR__ . '/../vendor/autoload.php';

use kak\BankInfo\BankInfo;


$bank = new BankInfo();

$file = __DIR__ . '/../README.md';
$content = file_get_contents($file);


$cardTypes = BankInfo::getCardTypes();
$cardTypeCount = count($cardTypes);
$cardTypeList = implode(', ', $cardTypes);
$list1 = "##### Support detect browsers list ($cardTypeCount):\n\n<details>\n<summary>Show details</summary>\n\n $cardTypeList\n</details>";
$content = preg_replace("/(^#{5} List of card types(?:.*?)<\/details>)/ims", $list1, $content);
