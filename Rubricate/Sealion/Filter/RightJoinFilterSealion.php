<?php

namespace Rubricate\Sealion\Filter;

class RightJoinFilterSealion extends AbstractDisableWhereFilterSealion
{
    private $table;
    private $restriction;
    
    public function __construct($table, $restriction) 
    {
        $this->table      = $table;
        $this->restriction = $restriction;
    }


    public function getFilter()
    {
        return sprintf(
            " RIGHT JOIN %s ON %s ", 
            $this->table, $this->restriction
        );
    }


}

