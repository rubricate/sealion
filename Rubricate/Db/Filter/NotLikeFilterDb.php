<?php

namespace Rubricate\Db\Filter;

class NotLikeFilterDb extends AbstractEnableWhereFilterDb
{
    private $filter;

    public function __construct($key, $value) 
    {
        $this->filter = new FilterDb($key . ' NOT LIKE ', $value);
    }


    public function getFilter()
    {
        return $this->filter->getFilter();
    }


}

