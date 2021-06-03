<?php

namespace Rubricate\Sealion\Filter;

class HavingFilterSealion extends AbstractDisableWhereFilterSealion
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

