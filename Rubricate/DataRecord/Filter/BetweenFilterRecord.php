<?php

namespace Rubricate\DataRecord\Filter;

use Rubricate\DataRecord\Value\ValidatorValueRecord;

class BetweenFilterRecord extends AbstractEnableWhereFilterRecord
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
        $v = new ValidatorValueRecord();

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

