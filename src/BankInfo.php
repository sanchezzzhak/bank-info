<?php

namespace kak\BankInfo;


class BankInfo
{
    public const
        COUNTRY_RU = 'ru',  // Russia
        COUNTRY_BL = 'bl',  // Belarus
        COUNTRY_UA = 'ua',  // Ukraina
        COUNTRY_CN = 'cn',  // China
        COUNTRY_KZ = 'kz';  // kazakhstan

    public const CARD_TYPE_INTER_PAYMENTS = 'InterPayments';
    public const CARD_TYPE_ELECTRON = 'Electron';
    public const CARD_TYPE_UNION_PAY = 'UnionPay';
    public const CARD_TYPE_DISCOVER = 'Discover';
    public const CARD_TYPE_MAESTRO = 'Maestro';
    public const CARD_TYPE_VISA = 'Visa';
    public const CARD_TYPE_MASTER_CARD = 'MasterCard';
    public const CARD_TYPE_AMERICAN_EXPRESS = 'AmericanExpress';
    public const CARD_TYPE_DINERS = 'DinersClub';
    public const CARD_TYPE_JCB = 'JCB';
    public const CARD_TYPE_MIR = 'Mir';
    public const CARD_TYPE_NSPK_MIR = 'NSPK Mir';     # combined cards Mir + UnionPay
    public const CARD_TYPE_DANKORT = 'Dankort';
    public const CARD_TYPE_HUMO = 'Humo';             # payment system in Uzbekistan
    public const CARD_TYPE_UZCARD = 'UzCard';         # payment system in Uzbekistan
    public const CARD_TYPE_BELCARD = 'BelCard';       # payment system in Belarus
    public const CARD_TYPE_HIPERCARD = 'Hipercard';

    private const REGEX_CARD_TYPES = [
        self::CARD_TYPE_NSPK_MIR => '/^(676454|676907|677384|623446)/',
        self::CARD_TYPE_UZCARD => '/^(860012)/',
        self::CARD_TYPE_ELECTRON => '/^(4026|417500|4405|4508|4844|4913|4917)/',
        self::CARD_TYPE_INTER_PAYMENTS => '/^636/',
        self::CARD_TYPE_UNION_PAY => '/^(62|88)/',
        self::CARD_TYPE_DISCOVER => '/^6(?:011|4|5)/',
        self::CARD_TYPE_MAESTRO => '/^(50|5[6-9]|6)/',
        self::CARD_TYPE_DANKORT => '/^4571/',
        self::CARD_TYPE_VISA => '/^4/',
        self::CARD_TYPE_MASTER_CARD => '/^(5[1-5]|(?:222[1-9]|22[3-9][0-9]|2[3-6][0-9]{2}|27[01][0-9]|2720))/', // [2221-2720]
        self::CARD_TYPE_AMERICAN_EXPRESS => '/^3[47]/',
        self::CARD_TYPE_DINERS => '/^3(?:0([0-5]|95)|[689])/',
        self::CARD_TYPE_JCB => '/^(?:2131|1800|(?:352[89]|35[3-8][0-9]))/', // 3528-3589
        self::CARD_TYPE_MIR => '/^220(?:[0-4]|770)/',
        self::CARD_TYPE_HUMO => '/^(?:9860(?:03|1[09]))/',
        self::CARD_TYPE_BELCARD => '/^9112/',
        self::CARD_TYPE_HIPERCARD => '/^606282/',
    ];

    private static $banks;
    private static $prefixes;

    private static function init(): void
    {
        if (null === self::$banks) {
            self::$banks = spyc_load_file(__DIR__ . '/database/banks.yml');
        }

        if (null === self::$prefixes) {
            self::$prefixes = spyc_load_file(__DIR__ . '/database/prefixes.yml');
        }
    }

    /**
     * Get information on the $id, about the bank
     *
     * @param string $id
     * @return array
     */
    public static function getBankInfoById(string $id): array
    {
        self::init();
        return self::$banks[$id] ?? [];
    }

    /**
     * Search information bank for bin numbers
     *
     * @param string $firstSixBin
     * @param string $lastFourBin
     * @return array
     */
    public static function getBinInfo(string $firstSixBin, string $lastFourBin = ''): array
    {
        self::init();

        $cardType = '';
        $firstSixBin = substr($firstSixBin, 0, 8);

        foreach (self::REGEX_CARD_TYPES as $type => $regex) {
            if (preg_match($regex, $firstSixBin)) {
                $cardType = $type;
                break;
            }
        }

        $bankId = self::$prefixes[sprintf('%s-%s', $firstSixBin, $lastFourBin)] ?? 0;
        if ($bankId === 0) {
            $bankId = self::$prefixes[$firstSixBin] ?? 0;
        }

        return array_merge(['cardType' => $cardType], self::getBankInfoById((string)$bankId));
    }

    /**
     * List of card types
     *
     * @return array
     */
    public static function getCardTypes(): array
    {
        return array_keys(self::REGEX_CARD_TYPES);
    }

    /**
     * List of loaded prefixes from a'class
     * @return array = [
     *     0 => 0
     * ]
     */
    public static function getPrefixes(): array
    {
        self::init();
        return self::$prefixes ?? [];
    }

    /**
     * List of loaded banks from a'class
     * @return array = [
     *     0 => [
     *        'name' => 'string',
     *        'country' => 'string',
     *        'title'=> 'string',
     *        'enTitle' => 'string',
     *        'url' => 'string',
     *        'color' => 'string',
     *     ],
     * ]
     */
    public static function getBanks(): array
    {
        self::init();
        return self::$banks ?? [];
    }

    public static function search($name, $country = 'ru'): array
    {
        foreach (self::getBanks() as $bank) {
            if ($country !== $bank['country']) {
                continue;
            }
            if (preg_match(sprintf('~%s~i', implode('|', [
                $bank['name'],
                $bank['title'],
                $bank['enTitle'],
                str_replace(['https://'], '', trim($bank['url'], '/'))
            ])), $name)) {
                return $bank;
            }
        }

        return [];
    }

}