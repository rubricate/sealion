<?php

namespace Rubricate\DataRecord\Filter;

use Rubricate\DataRecord\Value\ValidatorValueRecord;

class NotInFilterRecord extends AbstractEnableWhereFilterRecord
{
    private $filter;

    public function __construct($value) 
    {
        $v = new ValidatorValueRecord();

        if ($v->isValidObj($value)) {
            $value = $value->getvalue();
        }

        $this->filter = new RawFilterRecord(sprintf('NOT IN (%s)', $value));
    }


    public function getFilter()
    {
        return $this->filter->getFilter();
    }


}

