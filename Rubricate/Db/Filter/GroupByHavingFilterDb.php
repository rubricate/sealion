<?php

namespace Rubricate\Db\Filter;

class GroupByHavingFilterDb extends AbstractDisableWhereFilterDb
{
    private $groupBy;
    private $having;
    
    public function __construct(
        GroupByFilterDb $groupBy,
        HavingFilterDb  $having
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

