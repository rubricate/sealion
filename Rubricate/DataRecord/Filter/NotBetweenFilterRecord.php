<?php

namespace Rubricate\DataRecord\Filter;

use Rubricate\DataRecord\Value\ValidatorValueRecord;

class NotBetweenFilterRecord extends AbstractEnableWhereFilterRecord
{
    private $property;
    private $valueStart;
    private $valueEnd;

    
    public function __construct($property, $valueStart, $valueEnd) 
    {
        self::init($property, $valueStart, $valueEnd);
    }


    public function getFilter()
    {
        return sprintf(
            "%s NOT BETWEEN %s AND %s", 
            $this->property, $this->valueStart, $this->valueEnd
        );
    }


    private function init($property, $valueStart, $valueEnd)
    {
        $v = new ValidatorValueRecord();

        if($v->isValidObj($valueStart)) {
            $valueStart = $valueStart->getvalue();
        }

        if($v->isValidObj($valueEnd)) {
            $valueEnd = $valueEnd->getvalue();
        }

        $this->property   = $property;
        $this->valueStart = $valueStart;
        $this->valueEnd   = $valueEnd;

        return $this;

    } 

}

