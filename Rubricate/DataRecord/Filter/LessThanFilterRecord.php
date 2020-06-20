<?php

namespace Rubricate\DataRecord\Filter;

use Rubricate\DataRecord\Value\Validator\ValueValidatorRecord;

class LessThanFilterRecord extends AbstractEnableWhereFilterRecord
{
    private $filter;

    public function __construct($key, $value) 
    {
        $this->filter = new FilterRecord($key . ' < ', $value);
    }


    public function getFilter()
    {
        return $this->filter->getFilter();
    }


}

