<?php

namespace Faker\Provider\ps_AF;

class Address extends \Faker\Provider\Address
{
    protected static $cityPrefix = ['ولایت'];
    protected static $streetPrefix = ['کوڅه'];
    protected static $buildingNamePrefix = ['ودانۍ','کور'];
    protected static $buildingNumberPrefix = ['ودانۍ شمیره'];
    protected static $postcodePrefix = ['پوستغالی شمیره'];

    protected static $cityName = [
        'اُرُزگان',
        'بادغیس',
        'بامیان',
        'بدخشان',
        'بغلان',
        'بلخ',
        'پروان',
        'پکتیا',
        'پکتیکا',
        'پنجشیر',
        'تخار',
        'جوزجان',
        'خوست',
        'دایکُندی',
        'زابل',
        'سرِپُل',
        'سمنگان',
        'غزنی',
        'غور',
        'فاریاب',
        'فَراه',
        'قندوز',
        'قندهار',
        'کابل',
        'کاپیسا',
        'کُنَر',
        'لَغمان',
        'لوگر',
        'میدان وردک',
        'ننگرهار',
        'نورستان',
        'نیمروز',
        'هرات',
        'هلمند'
    ];

    protected static $cityFormats = [
        '{{cityName}}',
        '{{cityPrefix}} {{cityName}}',
    ];
    protected static $streetNameFormats = [
        '{{streetPrefix}} {{lastName}}',
    ];
    protected static $streetAddressFormats = [
        '{{streetName}} {{building}}',
    ];
    protected static $addressFormats = [
        '{{city}} {{streetAddress}} {{postcodePrefix}} {{postcode}}',
        '{{city}} {{streetAddress}}',
    ];
    protected static $buildingFormat = [
        '{{buildingNamePrefix}} {{firstName}} {{buildingNumberPrefix}} {{buildingNumber}}',
        '{{buildingNamePrefix}} {{firstName}}',
    ];

    protected static $postcode = ['####'];
    protected static $country = ['افغانستان'];

    /**
     * @example 'ولایت'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'غزنی'
     */
    public static function cityName()
    {
        return static::randomElement(static::$cityName);
    }

    /**
     * @example 'کوڅه'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'ودانۍ'
     */
    public static function buildingNamePrefix()
    {
        return static::randomElement(static::$buildingNamePrefix);
    }

    /**
     * @example 'کور'
     */
    public static function buildingNumberPrefix()
    {
        return static::randomElement(static::$buildingNumberPrefix);
    }

    /**
     * @example 'آریا ودانۍ کور شمیره 15'
     */
    public function building()
    {
        $format = static::randomElement(static::$buildingFormat);

        return $this->generator->parse($format);
    }

    /**
     * @example 'پوستغالی شمیره'
     */
    public static function postcodePrefix()
    {
        return static::randomElement(static::$postcodePrefix);
    }
}
