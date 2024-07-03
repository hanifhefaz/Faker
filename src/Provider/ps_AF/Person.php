<?php

namespace Faker\Provider\ps_AF;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    ];

    /**
     * @see https://
     */
    protected static $firstNameMale = [

    ];

    /**
     * @see https://
     */
    protected static $firstNameFemale = [

    ];

    /**
     * @see https://
     */
    protected static $lastName = [

    ];

    protected static $titleMale = [];
    protected static $titleFemale = [];

    /**
     * This method returns a valid Afghanistan nationalCode
     *
     * @example ''
     *
     * @see https://
     *
     * @return string
     */
    public static function nationalCode()
    {
        $area = self::createAreaCode();
        $core = self::createCoreCode();
        $control = self::createControlCode($area, $core);

        return sprintf('%03d%06d%01d', $area, $core, $control);
    }

    /**
     * This method generates a 3-digit valid area code to be used in nationalCode
     *
     * @return int|string
     */
    private static function createAreaCode()
    {
        $area = '000';

        while ($area == '000') {
            $area = static::numerify('###');
        }

        return $area;
    }

    /**
     * This method randomly generates a 6-digit core code for nationalCode
     *
     * @return string
     */
    private static function createCoreCode()
    {
        return static::numerify('######');
    }

    /**
     * This method uses the Afghanistan nationalCode validation algorithm to generate a valid 10-digit code
     *
     * @param string $area
     * @param string $core
     *
     * @see https:
     *
     * @return int
     */
    private static function createControlCode($area, $core)
    {
        $subNationalCodeString = $area . $core;

        $sum = 0;
        $count = 0;

        for ($i = 10; $i > 1; --$i) {
            $sum += $subNationalCodeString[$count] * ($i);
            ++$count;
        }

        if (($sum % 11) < 2) {
            return $sum % 11;
        }

        return 11 - ($sum % 11);
    }
}
