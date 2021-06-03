<?php

namespace Rubricate\Sealion\Filter;

abstract class AbstractDisableWhereFilterSealion implements IFilterSealion
{
    
    public function isWhere()
    {
        return false;
    } 
   
}

