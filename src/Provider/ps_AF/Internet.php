<?php

namespace Faker\Provider\ps_AF;

class Internet extends \Faker\Provider\Internet
{
    protected static $userNameFormats = [
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    ];

    protected static $safeEmailTld = [
        'com', 'af', 'me', 'net', 'org',
    ];

    /**
     * @see https://en.wikipedia.org/wiki/.af
     */
    protected static $tld = [
        'gov.af', 'com.af', 'org.af', 'net.af', 'edu.af','af'
    ];

    /**
     * @see http://en.wikipedia.org/wiki/Category:Pashto-language_surnames
     */
    protected static $lastNameAscii = [

    ];

    /**
     * @see http://en.wikipedia.org/wiki/Afghan_name
     */
    protected static $firstNameAscii = [

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
     * @example 'hanif.hefaz'
     */
    public function userName()
    {
        $format = static::randomElement(static::$userNameFormats);

        return static::bothify($this->generator->parse($format));
    }

    /**
     * @example 'hefaz.af'
     */
    public function domainName()
    {
        return static::randomElement(static::$lastNameAscii) . '.' . $this->tld();
    }
}
