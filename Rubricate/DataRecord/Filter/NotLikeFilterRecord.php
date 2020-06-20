<?php

namespace Rubricate\DataRecord\Filter;

class NotLikeFilterRecord extends AbstractEnableWhereFilterRecord
{
    private $filter;

    public function __construct($key, $value) 
    {
        $this->filter = new FilterRecord($key . ' NOT LIKE ', $value);
    }


    public function getFilter()
    {
        return $this->filter->getFilter();
    }


}

