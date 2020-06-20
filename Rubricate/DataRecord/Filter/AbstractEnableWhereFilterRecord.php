<?php

namespace Rubricate\DataRecord\Filter;

abstract class AbstractEnableWhereFilterRecord implements IFilterRecord
{
    
    public function isWhere()
    {
        return true;
    } 
   
}

