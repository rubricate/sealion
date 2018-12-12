<?php

namespace Rubricate\Db\Filter;

class RightJoinFilterDb extends AbstractDisableWhereFilterDb
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

