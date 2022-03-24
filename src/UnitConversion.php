<?php

namespace Expandcart\UnitConversion;

use Cassandra\Float_;

class UnitConversion
{
    private $pound = 2.1;

    private $kilo = 0;

    public function __construct($kilo)
    {
        $this->kilo = $kilo;
    }

    public function toPound($kilo){
        return $this->kilo * 2.204623;
    }
}