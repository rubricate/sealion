<?php

namespace Rubricate\Db\Filter;

class GroupByFilterDb extends AbstractDisableWhereFilterDb
{
    private $property;

    public function __construct($property) 
    {
        $this->property = $property;
    }


    public function getFilter()
    {
        return sprintf('GROUP BY %s ', $this->property);
    }

    
}

