<?php

namespace Rubricate\Db\Filter;

class EqualToFilterDb extends AbstractEnableWhereFilterDb
{
    private $filter;

    public function __construct($key, $value) 
    {
        $this->filter = new FilterDb($key . ' = ', $value);
    }


    public function getFilter()
    {
        return $this->filter->getFilter();
    }


}

