<?php

namespace Rubricate\DataRecord\Filter;

class RawFilterRecord extends AbstractDisableWhereFilterRecord
{
    private $raw;

    public function __construct($raw)  
    {
        $this->raw = $raw;
    }


    public function getFilter()
    {
        return $this->raw;
    }

}

