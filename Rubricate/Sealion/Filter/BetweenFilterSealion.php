<?php

namespace Rubricate\Sealion\Filter;

use Rubricate\Sealion\Value\ValidatorValueSealion;

class BetweenFilterSealion extends AbstractEnableWhereFilterSealion
{
    private $key, $start, $end;
    
    public function __construct($key, $start, $end) 
    {
        self::init($key, $start, $end);
    }


    public function getFilter()
    {
        return sprintf(
            "%s BETWEEN %s AND %s", 
            $this->key, $this->start, $this->end
        );
    }


    private function init($key, $start, $end)
    {
        $v = new ValidatorValueSealion();

        if ($v->isValidObj($start)) {
            $start = $start->getvalue();
        }

        if ($v->isValidObj($end)) {
            $end = $end->getvalue();
        }

        $this->key   = $key;
        $this->start = $start;
        $this->end   = $end;

        return $this;
    } 

}

