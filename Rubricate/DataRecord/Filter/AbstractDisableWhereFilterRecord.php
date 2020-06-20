<?php

namespace Rubricate\DataRecord\Filter;

abstract class AbstractDisableWhereFilterRecord implements IFilterRecord
{
    
    public function isWhere()
    {
        return false;
    } 
   
}

