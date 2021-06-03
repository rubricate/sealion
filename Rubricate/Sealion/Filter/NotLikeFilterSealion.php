<?php

namespace Rubricate\Sealion\Filter;

class NotLikeFilterSealion extends AbstractEnableWhereFilterSealion
{
    private $filter;

    public function __construct($key, $value) 
    {
        $this->filter = new FilterSealion($key . ' NOT LIKE ', $value);
    }


    public function getFilter()
    {
        return $this->filter->getFilter();
    }


}

