<?php

namespace Faker\Provider\ps_AF;

class Company extends \Faker\Provider\Company
{
    protected static $formats = [
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{lastName}}',
        '{{companyField}} {{firstName}}',
        '{{companyField}} {{firstName}}',
        '{{companyField}} {{lastName}}',
    ];

    protected static $companyPrefix = [
        'شرکت', 'موسسه', 'خیریه بنسټ',
    ];

    protected static $companyField = [
        'ټکنالوژی', 'ودانیزه', 'معادن', ' استخراج',
        'پانګه اچوونه', 'نساجی', 'کارمونده', 'لوجیستیک', 'تولیدی', 'فولاد',
    ];

    protected static $contract = [
        'رسمی', 'ټول وخت', 'ساعتوار','میاشتنی','کلنی'
    ];

    /**
     * @example 'موسسه'
     *
     * @return string
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * @example 'خیریه بنسټ'
     *
     * @return string
     */
    public static function companyField()
    {
        return static::randomElement(static::$companyField);
    }

    /**
     * @example 'کلنی'
     *
     * @return string
     */
    public function contract()
    {
        return static::randomElement(static::$contract);
    }
}
