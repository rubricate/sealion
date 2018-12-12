<?php

namespace Rubricate\Db\Filter;

class RawFilterDb extends AbstractDisableWhereFilterDb
{
    private $raw;

    public function __construct($raw)  
    {
        $this->raw = $raw;
    }


    public function getFilter()
    {
        return $this->raw;
    }

}

