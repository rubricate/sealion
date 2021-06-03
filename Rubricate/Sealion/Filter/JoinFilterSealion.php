<?php

namespace Rubricate\Sealion\Filter;

class JoinFilterSealion extends AbstractDisableWhereFilterSealion
{
    private $table;
    private $filter;
    
    public function __construct($table, $key, $value) 
    {
        $this->filter = new FilterSealion($key, $value);
        $this->table = $table;
    }
    

    public function getFilter()
    {
        return sprintf("JOIN %s ON (%s)", 
            $this->table, $this->filter->getFilter()
        );
    }


}

