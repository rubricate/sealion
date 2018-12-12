<?php

namespace Rubricate\Db\Filter;

abstract class AbstractEnableWhereFilterDb implements IFilterDb
{
    
    public function isWhere()
    {
        return true;
    } 
   
}

