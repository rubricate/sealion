<?php

namespace Rubricate\Sealion\Filter;

use Rubricate\Sealion\Value\Validator\ValueValidatorSealion;

class LessThanFilterSealion extends AbstractEnableWhereFilterSealion
{
    private $filter;

    public function __construct($key, $value) 
    {
        $this->filter = new FilterSealion($key . ' < ', $value);
    }


    public function getFilter()
    {
        return $this->filter->getFilter();
    }


}

