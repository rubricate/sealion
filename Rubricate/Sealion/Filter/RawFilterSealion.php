<?php

namespace Rubricate\Sealion\Filter;

class RawFilterSealion extends AbstractDisableWhereFilterSealion
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

