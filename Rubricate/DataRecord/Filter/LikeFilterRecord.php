<?php

namespace Rubricate\DataRecord\Filter;

class LikeFilterRecord extends AbstractEnableWhereFilterRecord
{
    private $filter;

    public function __construct($key, $value) 
    {
        $this->filter = new FilterRecord($key . ' LIKE ', $value);
    }


    public function getFilter()
    {
        return $this->filter->getFilter();
    }

}

