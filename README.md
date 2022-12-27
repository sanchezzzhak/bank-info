# bank-info
Spot search of the bank name by the first six card numbers.

Created based on:
* [chekalsky/php-banks-db](https://github.com/chekalsky/php-banks-db)
* [ramoona/banks-db](https://github.com/ramoona/banks-db)

### Install
```
composer require kak/bank-info:@dev 
```

Minimum dependencies:
* PHP - 7.1 or later
* YAML parser - [mustangostang/spyc](https://github.com/mustangostang/spyc)


### Usage
```php

  use kak\BankInfo\BankInfo;

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

##### List of card types(16):

<details>
<summary>Show details</summary>

 AmericanExpress, BelCard, Dankort, DinersClub, Discover, Electron, Humo, InterPayments, JCB, Maestro, MasterCard, Mir, NSPK Mir, UnionPay, UzCard, Visa
</details>

##### List of banks(290):

<details>
<summary>Show details</summary>

 Absa (za), Absolutbank (by), Absolutbank (ru), Agricultural Bank of China (cn), AIB Bank (ie), Airbank (cz), Akbank (tr), Ak Bars Bank (ru), Akcept Bank (ru), Akibank (ru), al Baraka (tr), Alexandrovskiy Bank (ru), Alfa-Bank (ru), Alfa-Bank (ua), Alfabank (by), Ally (us), Almazergienbank (ru), American Express (be), American Express (us), Ansar Bank (ir), ANZ (au), ANZ Bank (Taiwan) (tw), Avangard (ru), Avtogradbank (ru), Ayandeh Bank (ir), B&N Bank (ru), Banca Intesa (ru), Bank Asya (tr), Bank CenterCredit (kz), Bank Koltso Urala (ru), Bank Kuban Credit (ru), Bank Levoberezhny (ru), Bank Millennium (pl), Bank Moskva-Minsk (by), Bank of America (us), Bank of China (cn), Bank of Communications (cn), Bank of Industry and Mine (ir), Bank Of Ireland (ie), Bank of New Zealand (nz), Bank of the Oriental Republic of Uruguay (uy), Bank Otkritie (ru), Bank Rossiya (ru), Bank Sain-Petersburg (ru), Bankwest (au), Barclaycard (gb), Barclays (us), Barclays Bank plc (gb), Belagroprombank (by), Belarusbank (by), Belfius Bank (be), Belgazprombank (by), Belinvestbank (by), Beloruskii Narodny Bank (by), BelSwiss (by), BelVEB Bank (by), Bidvest Bank (za), Boursorama (fr), BPS-Sberbank (by), bunq (nl), Caisse d'Épargne (fr), Capital One Bank (us), Capitec (za), Cathay United Bank (tw), Central Bank of the Islamic Republic of Iran (ir), Chase (us), Chelindbank (ru), Chelyabinvestbank (ru), China Citic Bank (cn), China Construction Bank (cn), China Everbright Bank (cn), China Guangfa Bank (cn), China Merchants Bank (cn), China Minsheng Bank (cn), Citibank (ru), Citibank (us), Citibank Taiwan (tw), Coalmetbank (ru), Commonwealth Bank of Australia (au), Credit Agricole (Ukraine) (ua), Credit Bank of Moscow (ru), Credit Mutuel (fr), CTBC Bank (tw), Curve (gb), Databank (ru), Day Bank (ir), Delta Bank (by), DemirBank (kg), Denizbank (tr), Deutsche Bank Polska (pl), Diamantbank (ua), DOM.RF Bank (ru), DongA Bank (vn), E.SUN Bank (tw), Eghtesad Novin Bank (ir), Energotransbank (ru), ePayments (gb), Eurasian Bank (kz), Expobank (ru), Export Development Bank (ir), Fifth Third Bank (us), Finansbank (tr), Fio banka (cz), First National Bank (South Africa) (za), Fora Bank (ru), Forshtadt Bank (ru), ForteBank (kz), Fortuneo (fr), FUIB (First Ukrainian International Bank) (ua), Galicia Bank / Naranja (ar), Garanti Bankasi (tr), Gazprombank (ru), Genbank (ru), Ghavamin Bank (ir), GO (au), Google Wallet (us), Halifax (gb), Halk Bankası (tr), Halyk Bank (kz), HDFC (in), Hekmat Iranian Bank (ir), Hellenic Bank (cy), he Shanghai Commercial & Savings Bank, Ltd.  (tw), Home Credit Bank (by), Home Credit Bank (ru), HSBC (ar), HSBC (ru), HSBC (tr), HSBC (us), HSBC Bank plc (gb), Hua Nan Bank (tw), Huaxia Bank (cn), ICBC (ar), ICICI (in), InBank (ru), Industrial and Commercial Bank of China (cn), Industrial Bank Co. Ltd. (cn), ING Bank (tr), ING Bank Slaski (pl), ING Belgium (be), ING Direct (au), ING Direct (fr), ininal (tr), Iran Zamin Bank (ir), JPMorgan Chase (us), Jusan Bank (kz), Jyske Bank (dk), Karafarin Bank (ir), Kazkommertsbank (kz), KEB Hana Bank (kr), Keshavarzi Bank (ir), Keystone Bank (ng), Kosar Financial and Credit Institution (ir), KredoBank (ua), KS Bank (ru), Kuveyt Türk (tr), Kuznetskbusinessbank (ru), LCL (fr), Lloyds Bank plc (gb), Lombard (au), Macro Bank (ar), Mashreqbank (ae), Maskan Bank (ir), MDM Bank (ru), Mehr Eqtesad Bank (ir), Melal Credit Institution (ir), Mellat Bank (ir), Melli Bank (ir), Metabank (us), Metallinvestbank (ru), Metro Bank (gb), Middle East Bank (ir), Millennium BCP (pt), Modulbank (ru), Monzo (gb), MTBank (by), MTS Bank (ru), N26 (de), Nationwide (gb), NatWest (gb), Navy Federal Credit Union (us), Noor Credit Institution (ir), Nordea (fi), Novikombank (ru), Nykredit (dk), Oschadbank (ua), OTP Bank (ua), Paritetbank (by), Parsian Bank (ir), Pasargad Bank (ir), Payoneer (us), Ping An Bank (cn), Portuguese Investment Bank (pt), Postbank (de), Post Bank (ir), Post Bank (ru), PostePay SpA (it), PRAVEX-BANK (ua), Priorbank (by), Privatbank (ua), ProCredit Bank (Ukraine) (ua), Promsvyazbank (ru), Qarzol-Hasaneh Mehr Iran Bank (ir), QIWI (ru), Raiffeisenbank (ru), Raiffeisen Bank Aval (ua), Raiffeisen Polbank (pl), Refah Bank (ir), Renaissance Capital (ru), Resalat Gharzolhasaneh Bank (ir), Revolut (gb), Rocketbank (ru), Rosbank (ru), RosEvro Bank (ru), Round Bank (ru), Russian Agricultural Bank (ru), Russian Regional Development Bank (ru), Russian Standard Bank (ru), Saderat Bank (ir), Saman Bank (ir), Santander (br), Santander (pl), Santander (uy), Santander Rio (ar), Santander UK plc (gb), Sarmayeh Bank (ir), Sberbank (kz), Sberbank (ru), SBI (in), Scotiabank (ca), SDM Bank (ru), Seker Bank (tr), Sepah Bank (ir), Severgazbank (ru), Shahr Bank (ir), Shanghai Pudong Development Bank (cn), SIAB (ru), Simple (us), Sina Bank (ir), SMP Bank (ru), Societe Generale (fr), Societe Generale Banka Srbija Ad Beograd (rs), Soldo (gb), Sovcombank (ru), Suncorp (au), SunTrust (us), Surgutneftegasbank (ru), Taichung Bank (tw), Taipei Fubon Bank (tw), Tangerine (ca), TD Bank (us), TD Canada Trust (ca), Tejarat Bank (ir), Tinkoff Bank (ru), Tose'e Ta'avon Bank (ir), Tosee Credit Institution (ir), Tourism Bank (ir), Transcapitalbank (ru), Trust (ru), Trustbank (by), TSB (gb), Türk Ekonomi Bankası (tr), Türkiye Finans (tr), Türkiye İş Bankası (tr), Ukreximbank (ua), Ukrgasbank (ua), Ukrsibbank (ua), Ukrsotsbank (ua), Uniastrum Bank (ru), UniCredit Bank (ru), UniCredit Bank (ua), Ural Bank for Reconstruction and Development (ru), UralSib Bank (ru), US Bank (us), Vakıf Bank (tr), Virgin Money South Africa (za), Vozrozhdenie (ru), VPB (ru), VTB (Belarus) (by), VTB (ru), Wells Fargo (us), Wilobank (ar), XalqBank (az), Yapı ve Kredi Bankası (tr), YooMoney (ru), Zapsibcombank (ru), Zenit (ru), Zheshang Bank (cn), Ziraat Bankası (tr), ČSOB (cz)
</details>

#### License 
[MIT](LICENSE)

#### Contribute development
Open the issue for the added new bank or make changes to existing data or create new entity data, via pr. (⚠ Do not leave full card details, only the first 5-6 chars. in some countries, first 6 chars and last 4 chars are allowed)

In case your bank card ot detected, please check if your bank already in our [fixtures banks.yml](src/database/banks.yml).