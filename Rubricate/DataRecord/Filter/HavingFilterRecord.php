<?php

namespace Rubricate\DataRecord\Filter;

class HavingFilterRecord extends AbstractDisableWhereFilterRecord
{
    private $filter;

    public function __construct($filter) 
    {
        $this->filter = $filter;
    }


    public function getFilter()
    {
        return sprintf('HAVING %s ', $this->filter);
    }


}

