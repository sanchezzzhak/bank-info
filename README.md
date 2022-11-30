# bank-info
Spot search of the bank name by the first six card numbers.

created based on chekalsky/php-banks-db

### Usage
```php

  use \kak\BankInfo\BankInfo;

  $result = BankInfo::getBinInfo(533669);

  /*
  result
  ^ array:7 [
    "cardType" => "MasterCard"
    "name" => "sberbank"
    "country" => "ru"
    "title" => "Сбербанк"
    "enTitle" => "Sberbank"
    "url" => "https://www.sberbank.ru"
    "color" => "#309c0b"
  ]
  */
  
  $result = BankInfo::getBinInfo(558823);
  /*
  ^ array:7 [
    "cardType" => "MasterCard"
    "name" => "chase"
    "country" => "us"
    "title" => "Chase"
    "enTitle" => "Chase"
    "url" => "https://www.chase.com/"
    "color" => "#0f5ba7"
  ]
  */
```

##### List of card types (0):
<details>
<summary>Show details</summary>

</details>

##### List of banks (0):
<details>
<summary>Show details</summary>

</details>