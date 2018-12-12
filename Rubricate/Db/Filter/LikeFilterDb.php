<?php

namespace Rubricate\Db\Filter;

class LikeFilterDb extends AbstractEnableWhereFilterDb
{
    private $filter;

    public function __construct($key, $value) 
    {
        $this->filter = new FilterDb($key . ' LIKE ', $value);
    }


    public function getFilter()
    {
        return $this->filter->getFilter();
    }

}

