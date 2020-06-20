<?php

namespace Rubricate\DataRecord\Filter;

class GroupByHavingFilterRecord extends AbstractDisableWhereFilterRecord
{
    private $groupBy;
    private $having;
    
    public function __construct(
        GroupByFilterRecord $groupBy,
        HavingFilterRecord  $having
    ) { 
        $this->groupBy = $groupBy;
        $this->having  = $having;
    }


    public function getFilter()
    {
        return 
            $this->groupBy ->getFilter() . ' ' .
            $this->having  ->getFilter();
    }
   
    
}

