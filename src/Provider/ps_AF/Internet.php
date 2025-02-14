<?php

namespace Faker\Provider\ps_AF;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = ['{{ lastNameAscii }}.{{ firstNameAscii }}', '{{ firstNameAscii }}.{{ lastNameAscii }}', '{{ firstNameAscii }}##', '?{{ lastNameAscii }}'];

    protected static $safeEmailTld = ['com', 'af', 'me', 'net', 'org'];

    /**
     * @see https://en.wikipedia.org/wiki/.af
     */
    protected static $tld = ['gov.af', 'com.af', 'org.af', 'net.af', 'edu.af', 'af'];

    /**
     * @see http://en.wikipedia.org/wiki/Category:Pashto-language_surnames
     */
    protected static $lastNameAscii = ['afridi', 'akakhel', 'alikhel', 'allaiwal', 'babai', 'bangash', 'banoori', 'banuchi', 'barozai', 'bazai', 'bettani', 'changezi', 'dawar', 'dawi', 'deshiwal', 'dirani', 'durrani', 'gandapur', 'ghilji', 'hafizkhel', 'ibrahimkhel', 'ibrahimzai', 'jalalzai', 'kakar', 'khan', 'kharoti', 'khattak', 'lodi', 'lohani', 'mandar', 'marwat', 'nasar', 'niazi', 'panni', 'safi', 'shirani', 'tanai', 'turkhel', 'wesa', 'yusufzai'];

    /**
     * @see https://name-archive.fandom.com/wiki/Pashto_names
     */
    protected static $firstNameAscii = [
        'Abasin',
        'Abdul',
        'Ahmed',
        'Aimal',
        'Ali',
        'Alam',
        'Alamzeb',
        'Amail',
        'Amu',
        'Andam',
        'Angar',
        'Armaghan',
        'Arman',
        'Arsalan',
        'Aryan',
        'Asfand',
        'Asfandyar',
        'Atal',
        'Atsak',
        'Aurang',
        'Awalmir',
        'Azlan',
        'Azmaray',
        'Babak',
        'Babrak',
        'Bacha',
        'Badam',
        'Bahram',
        'Bahramand',
        'Bahrawar',
        'Bakht',
        'Balach',
        'Balay',
        'Barlas',
        'Baryal',
        'Baryalai',
        'Baseer',
        'Batoor',
        'Baz',
        'Bazgar',
        'Bazir',
        'Behroz',
        'Beltoon',
        'Beroj',
        'hinar',
        'Dagar',
        'Darab',
        'Darman',
        'Darwesh',
        'Darya',
        'Daryab',
        'Daulat',
        'Dawar',
        'Diar',
        'Dilawar',
        'Droon',
        'Elam',
        'Farhang',
        'Farihund',
        'Gahez',
        'Gedi',
        'Ghairat',
        'Ghakhtalay',
        'Ghalji',
        'Ghamay',
        'Gharsanay',
        'Ghatool',
        'Ghazan',
        'Ghazin',
        'Ghorzang',
        'Ghunchagul',
        'Ghurghusht',
        'Gogal',
        'Gorbat',
        'Grant',
        'Gulab',
        'Gulzar',
        'Hask',
        'Helmand',
        'Hewand',
        'Hukam',
        'Izat',
        'Janan',
        'Janat Gul',
        'Jandol',
        'Kakay',
        'Karlani',
        'Karmal',
        'Karwan',
        'Khagalay',
        'Khaista',
        'Khak',
        'Khalo',
        'Khan',
        'Khandawar',
        'Khialay',
        'Khog',
        'Khushal',
        'Khushdil',
        'Khwazun',
        'Khyber',
        'Kochai',
        'Kushan',
        'Lajbar',
        'Lashkar',
        'Lal',
        'Lawang',
        'Lawangin',
        'Lmar',
        'Liwal',
        'Mairanay',
        'Maiwand',
        'Malang',
        'Malook',
        'Malyar',
        'Manan',
        'Mangal',
        'Marghoz',
        'Marjan',
        'Marwand',
        'Mashal',
        'Mateen',
        'Mehtar',
        'Minatbar',
        'Mirwais',
        'Mirzal',
        'Mohambar',
        'Muhammad',
        'Nang',
        'Nangial',
        'Noomyalay',
        'Nufail',
        'Olas',
        'Olasyar',
        'Paiman',
        'Pamir',
        'Pashtoon',
        'Pason',
        'Pasoon',
        'Patang',
        'Patman',
        'Patwal',
        'Patyal',
        'Paywastun',
        'Pelabo',
        'Perzo',
        'Pohand',
        'Pordal',
        'Powneda',
        'Psarlay',
        'Qajeer Gul',
        'Qalandar',
        'Rahamdil',
        'Rangeen',
        'Reday',
        'Reshteen',
        'Roshan',
        'Rustam',
        'Sabawoon',
        'Sadin',
        'Sahar',
        'Sahar Gul',
        'Sahim',
        'Saifur',
        'Salar',
        'Samandar',
        'Samoon',
        'Samsor',
        'Sangar',
        'Sangin',
        'Sangrez',
        'Sanobar',
        'Sarban',
        'Sarbaz',
        'Sardar',
        'Sartor',
        'Sayel',
        'Selab',
        'Selani',
        'Shahsawar',
        'Shahzar',
        'Shamal',
        'Shamshad',
        'Sher',
        'Sherdil',
        'Sherin',
        'Shin Gul',
        'Shindi Gul',
        'Shino',
        'Shpol',
        'Shpoon',
        'Shuja',
        'Sibghatullah',
        'Sifat',
        'Sikandar',
        'Sohrab',
        'Sparlay',
        'Spetselay',
        'Spin',
        'Spin Gul',
        'Spinzar',
        'Storay',
        'Sur Gul',
        'Suweil',
        'Syal',
        'anim',
        'Taroon',
        'Tawas',
        'Teri',
        'Tofan',
        'Tolwak',
        'Tor Gul',
        'Toryal',
        'Toti',
        'Turan',
        'Turialai',
        'Wadaan',
        'Wais',
        'Wakdar',
        'Wakman',
        'Wali',
        'Yama',
        'Yaqut',
        'afran',
        'Zalaan',
        'Zaland',
        'Zalmay',
        'Zapran',
        'Zar Gul',
        'Zarwali',
        'Zarak',
        'Zaram',
        'Zarang',
        'Zarbat',
        'Zardab',
        'Zardad',
        'Zargar',
        'Zarghun',
        'Zarhawar',
        'Zarhgay',
        'Zarin',
        'Zarkanay',
        'Zarlesh',
        'Zarmast',
        'Zarnosh',
        'Zaryab',
        'Zawaar',
        'Zawar',
        'Zgard',
        'Ziar',
        'Ziarmal',
        'Zigar',
        'Zmarak',
        'Zmaray',
        'Zorak',
        'Zorawar',
        'Zwak',
        'Zwandun',
        'Afia',
        'Aghala',
        'Ambrin',
        'Angeza',
        'Anar',
        'Ara',
        'Apana',
        'Aryana',
        'Badrai',
        'Bakht Awara',
        'Bala Nashta',
        'Balbala',
        'Banafsha',
        'Barsala',
        'Bazira',
        'Benazira',
        'Bibi',
        'Bibi Rokhana',
        'Brekhna',
        'Diwa',
        'Durkhanai',
        'Farishta',
        'Gabina',
        'Galai',
        'Ghatola',
        'Ghorashka',
        'Ghotai',
        'Ghuncha',
        'Gorgora',
        'Grana',
        'Gulalai',
        'Gulchin',
        'Gulnar',
        'Hala',
        'Helai',
        'Hila',
        'Hina',
        'Husay',
        'Kashmala',
        'Khaista',
        'Khaperai',
        'Kharo',
        'Khatol',
        'Khkulay',
        'Khwaga',
        'Kochai',
        'Kontara',
        'Laila',
        'Lailuma',
        'Lakhta',
        'Lalma',
        'Lalzari',
        'Lamba',
        'Lawanga',
        'Lema',
        'Mahjabin',
        'Mahnur',
        'Mahzala',
        'Malalai',
        'Malghalara',
        'Mina',
        'Mukai',
        'Munawara',
        'Murchakai',
        'Muska',
        'Naghma',
        'Nangialai',
        'Narenja',
        'Natkai',
        'Nawyata',
        'Nazanina',
        'Nazdana',
        'Nazo',
        'Niazmina',
        'Orbakhta',
        'Orbala',
        'Orzala',
        'Palwasha',
        'Panra',
        'Parghunda',
        'Pariwash',
        'Parkha',
        'Pashmina',
        'Patasa',
        'Peghra',
        'Perkha',
        'Pokha',
        'Ranrha',
        'Rayan',
        'Rekhmina',
        'Reshtina',
        'Roshina',
        'Saba',
        'Salgay',
        'Sandara',
        'Sanga',
        'Sangina',
        'Selai',
        'Senzela',
        'Shahgalay',
        'Shahay',
        'Shahlalai',
        'Shamla',
        'Shandana',
        'Shanzai',
        'Shaperai',
        'Shastai',
        'Shazmina',
        'Sherin',
        'Shinkai',
        'Shinogai',
        'Shughla',
        'Spalmay',
        'Sparghai',
        'Spezala',
        'Spozmai',
        'Storai',
        'Tabana',
        'Talwasa',
        'Tanima',
        'Ugay',
        'Wadaana',
        'Wagma',
        'Wahida',
        'Wajia',
        'Warda',
        'Wawrina',
        'Wranga',
        'Wreshmin',
        'Zainba',
        'Zaituna',
        'Zakia',
        'Zala',
        'Zalanda',
        'Zaloba',
        'Zamba',
        'Zarbaha',
        'Zareena',
        'Zareesh',
        'Zarghuna',
        'Zarka',
        'Zarshala',
        'Zartaj',
        'Zhala',
        'Zhalai',
        'Zohal',
        'Zufash',
    ];

    public static function lastNameAscii()
    {
        return static::randomElement(static::$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::$firstNameAscii);
    }

    /**
     * @example 'zohal.bangash'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example 'kharoti.af'
     */
    public function domainName()
    {
        return static::randomElement(static::$lastNameAscii) . '.' . $this->tld();
    }
}
