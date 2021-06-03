<?php

namespace Rubricate\Sealion\Filter;

class LikeFilterSealion extends AbstractEnableWhereFilterSealion
{
    private $filter;

    public function __construct($key, $value) 
    {
        $this->filter = new FilterSealion($key . ' LIKE ', $value);
    }


    public function getFilter()
    {
        return $this->filter->getFilter();
    }

}

