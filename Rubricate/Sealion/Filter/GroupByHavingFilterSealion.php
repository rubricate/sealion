<?php

namespace Rubricate\Sealion\Filter;

class GroupByHavingFilterSealion extends AbstractDisableWhereFilterSealion
{
    private $groupBy;
    private $having;
    
    public function __construct(
        GroupByFilterSealion $groupBy,
        HavingFilterSealion  $having
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

