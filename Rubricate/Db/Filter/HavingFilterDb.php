<?php

namespace Rubricate\Db\Filter;

class HavingFilterDb extends AbstractDisableWhereFilterDb
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

