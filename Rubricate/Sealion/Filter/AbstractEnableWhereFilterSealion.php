<?php

namespace Rubricate\Sealion\Filter;

abstract class AbstractEnableWhereFilterSealion implements IFilterSealion
{
    
    public function isWhere()
    {
        return true;
    } 
   
}

