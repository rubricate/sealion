<?php

namespace Rubricate\DataRecord\Filter;

class RightJoinFilterRecord extends AbstractDisableWhereFilterRecord
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

