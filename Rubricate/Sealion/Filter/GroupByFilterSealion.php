<?php

namespace Rubricate\Sealion\Filter;

class GroupByFilterSealion extends AbstractDisableWhereFilterSealion
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

