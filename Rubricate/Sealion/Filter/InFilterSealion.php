<?php

namespace Rubricate\Sealion\Filter;

use Rubricate\Sealion\Value\ValidatorValueSealion;

class InFilterSealion extends AbstractEnableWhereFilterSealion
{
    private $filter;

    public function __construct($value) 
    {
        $v = new ValidatorValueSealion();

        if ($v->isValidObj($value)) {
            $value = $value->getvalue();
        }

        $this->filter = new RawFilterSealion(sprintf('IN (%s)', $value));
    }


    public function getFilter()
    {
        return $this->filter->getFilter();
    }


}

