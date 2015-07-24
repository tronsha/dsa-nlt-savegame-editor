<?php

namespace Editor;

/**
 * Class Char
 * @author Stefan Hüsges
 */
class Char
{
    protected $string = null;

    protected $name = null;
    protected $type = null;

    protected $typeList = [
        '00' => [
            '01' => 'Gaukler',
            '02' => 'Jäger',
            '03' => 'Krieger',
            '04' => 'Streuner',
            '05' => 'Thorwaler',
            '06' => 'Zwerg',
            '07' => 'Hexer',
            '08' => 'Druide',
            '09' => 'Magier',
            '0A' => 'Auelf',
            '0B' => 'Firnelf',
            '0C' => 'Waldelf'
        ],
        '01' => [
            '01' => 'Gauklerin',
            '02' => 'Jägerin',
            '03' => 'Kriegerin',
            '04' => 'Streunerin',
            '05' => 'Thorwalerin',
            '06' => 'Zwergin',
            '07' => 'Hexe',
            '08' => 'Druidin',
            '09' => 'Magierin',
            '0A' => 'Auelfe',
            '0B' => 'Firnelfe',
            '0C' => 'Waldelfe'
        ]
    ];

    public function __construct($string)
    {
        $this->string = $string;
        $this->name = $this->parseName();
        if ($this->name) {
            $typeValue = $this->hex(substr($this->string, 0x0021, 0x0001));
            $genderValue = $this->hex(substr($this->string, 0x0022, 0x0001));
            $this->type = $this->typeList[$genderValue][$typeValue];
        }
    }

    protected function parseName()
    {
        return trim(substr($this->string, 0x0000, 0x0010));
    }

    protected function hex($bin)
    {
        return strtoupper(bin2hex($bin));
    }

    public function getName()
    {
        return $this->name;
    }
}