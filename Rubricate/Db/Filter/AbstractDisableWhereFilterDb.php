<?php

namespace Rubricate\Db\Filter;

abstract class AbstractDisableWhereFilterDb implements IFilterDb
{
    
    public function isWhere()
    {
        return false;
    } 
   
}

