<?php

namespace Rubricate\DataRecord\Filter;

class GroupByFilterRecord extends AbstractDisableWhereFilterRecord
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

