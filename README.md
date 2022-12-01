# bank-info
Spot search of the bank name by the first six card numbers.

created based on chekalsky/php-banks-db

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

##### List of card types(13):

<details>
<summary>Show details</summary>

 AmericanExpress, Dankort, DinersClub, Discover, Electron, InterPayments, JCB, Maestro, MasterCard, Mir, NSPK Mir, UnionPay, Visa
</details>

##### List of banks(245):

<details>
<summary>Show details</summary>

 Absa (za), Absolutbank (by), Agricultural Bank of China (cn), AIB Bank (ie), Airbank (cz), Akbank (tr), Ak Bars Bank (ru), al Baraka (tr), Alfa-Bank (ru), Alfa-Bank (ua), Alfabank (by), Ally (us), American Express (be), American Express (us), Ansar Bank (ir), ANZ (au), ANZ Bank (Taiwan) (tw), Avangard (ru), Ayandeh Bank (ir), B&N Bank (ru), Bank Asya (tr), Bank CenterCredit (kz), Bank Koltso Urala (ru), Bank Kuban Credit (ru), Bank Levoberezhny (ru), Bank Millennium (pl), Bank Moskva-Minsk (by), Bank of America (us), Bank of China (cn), Bank of Communications (cn), Bank of Industry and Mine (ir), Bank Of Ireland (ie), Bank of New Zealand (nz), Bank of the Oriental Republic of Uruguay (uy), Bank Otkritie (ru), Bank Rossiya (ru), Bankwest (au), Bank «Sain-Petersburg» (ru), Barclaycard (gb), Barclays (us), Barclays Bank plc (gb), Belagroprombank (by), Belarusbank (by), Belfius Bank (be), Belgazprombank (by), Belinvestbank (by), Beloruskii Narodny Bank (by), BelSwiss (by), BelVEB Bank (by), Bidvest Bank (za), Boursorama (fr), BPS-Sberbank (by), bunq (nl), Caisse d'Épargne (fr), Capital One Bank (us), Capitec (za), Cathay United Bank (tw), Central Bank of the Islamic Republic of Iran (ir), Chase (us), Chelyabinvestbank (ru), China Citic Bank (cn), China Construction Bank (cn), China Everbright Bank (cn), China Guangfa Bank (cn), China Merchants Bank (cn), China Minsheng Bank (cn), Citibank (ru), Citibank (us), Citibank Taiwan (tw), Commonwealth Bank of Australia (au), Credit Agricole (Ukraine) (ua), Credit Mutuel (fr), CTBC Bank (tw), Curve (gb), Day Bank (ir), Delta Bank (by), DemirBank (kg), Denizbank (tr), Deutsche Bank Polska (pl), Diamantbank (ua), E.SUN Bank (tw), Eghtesad Novin Bank (ir), ePayments (gb), Export Development Bank (ir), Fifth Third Bank (us), Finansbank (tr), Fio banka (cz), First National Bank (South Africa) (za), Fora Bank (ru), Fortuneo (fr), FUIB (First Ukrainian International Bank) (ua), Galicia Bank / Naranja (ar), Garanti Bankasi (tr), Gazprombank (ru), Ghavamin Bank (ir), GO (au), Google Wallet (us), Halifax (gb), Halk Bankası (tr), HDFC (in), Hekmat Iranian Bank (ir), Hellenic Bank (cy), he Shanghai Commercial & Savings Bank, Ltd.  (tw), Home Credit Bank (by), Home Credit Bank (ru), HSBC (ar), HSBC (tr), HSBC (us), HSBC Bank plc (gb), Hua Nan Bank (tw), Huaxia Bank (cn), ICBC (ar), ICICI (in), Industrial and Commercial Bank of China (cn), Industrial Bank Co. Ltd. (cn), ING Bank (tr), ING Bank Slaski (pl), ING Belgium (be), ING Direct (au), ING Direct (fr), ininal (tr), Iran Zamin Bank (ir), JPMorgan Chase (us), Jyske Bank (dk), Karafarin Bank (ir), Kazkommertsbank (kz), Keshavarzi Bank (ir), Kosar Financial and Credit Institution (ir), KredoBank (ua), Kuveyt Türk (tr), LCL (fr), Lloyds Bank plc (gb), Lombard (au), Macro Bank (ar), Maskan Bank (ir), MDM Bank (ru), Mehr Eqtesad Bank (ir), Melal Credit Institution (ir), Mellat Bank (ir), Melli Bank (ir), Metabank (us), Metro Bank (gb), Middle East Bank (ir), Millennium BCP (pt), Monzo (gb), MTBank (by), N26 (de), Nationwide (gb), NatWest (gb), Navy Federal Credit Union (us), Noor Credit Institution (ir), Nordea (fi), Novikombank (ru), Nykredit (dk), Oschadbank (ua), OTP Bank (ua), Paritetbank (by), Parsian Bank (ir), Pasargad Bank (ir), Payoneer (us), Ping An Bank (cn), Portuguese Investment Bank (pt), Postbank (de), Post Bank (ir), Post Bank (ru), PRAVEX-BANK (ua), Priorbank (by), Privatbank (ua), ProCredit Bank (Ukraine) (ua), Promsvyazbank (ru), Qarzol-Hasaneh Mehr Iran Bank (ir), QIWI (ru), Raiffeisenbank (ru), Raiffeisen Bank Aval (ua), Raiffeisen Polbank (pl), Refah Bank (ir), Renaissance Capital (ru), Resalat Gharzolhasaneh Bank (ir), Revolut (gb), Rocketbank (ru), Rosbank (ru), RosEvro Bank (ru), Russian Standard Bank (ru), Saderat Bank (ir), Saman Bank (ir), Santander (uy), Santander Rio (ar), Santander UK plc (gb), Sarmayeh Bank (ir), Sberbank (kz), Sberbank (ru), SBI (in), Scotiabank (ca), Seker Bank (tr), Sepah Bank (ir), Shahr Bank (ir), Shanghai Pudong Development Bank (cn), SIAB (ru), Simple (us), Sina Bank (ir), SMP Bank (ru), Societe Generale (fr), Societe Generale Banka Srbija Ad Beograd (rs), Soldo (gb), Sovcombank (ru), Suncorp (au), SunTrust (us), Taichung Bank (tw), Taipei Fubon Bank (tw), Tangerine (ca), TD Bank (us), TD Canada Trust (ca), Tejarat Bank (ir), Tinkoff Bank (ru), Tose'e Ta'avon Bank (ir), Tosee Credit Institution (ir), Tourism Bank (ir), Trust (ru), Trustbank (by), TSB (gb), Türk Ekonomi Bankası (tr), Türkiye Finans (tr), Türkiye İş Bankası (tr), Ukreximbank (ua), Ukrgasbank (ua), Ukrsibbank (ua), Ukrsotsbank (ua), Uniastrum Bank (ru), UniCredit Bank (ru), UniCredit Bank (ua), UralSib Bank (ru), US Bank (us), Vakıf Bank (tr), Virgin Money South Africa (za), Vozrozhdenie (ru), VPB (ru), VTB (Belarus) (by), VTB (ru), VTB 24 (ru), Wells Fargo (us), Wilobank (ar), Yandex Money (ru), Yapı ve Kredi Bankası (tr), Ziraat Bankası (tr), ČSOB (cz)
</details>