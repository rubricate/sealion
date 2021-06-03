<?php

namespace Rubricate\Sealion\Filter;

class LeftJoinFilterSealion extends AbstractDisableWhereFilterSealion
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
        return sprintf(
            "LEFT JOIN %s ON (%s)", 
            $this->table, $this->filter->getFilter()
        );
    }


}

