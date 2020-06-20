<?php 

namespace Rubricate\DataRecord\Value;


class IntValueRecord implements IGetValueRecord
{
    private $value;
    
    public function __construct($value)
    {
        self::setValue($value);
    }


    public function getValue()
    {
        return $this->value;
    } 


    private function setValue($value)
    {
        $this->value = (int) $value;

        return $this;
    } 
    
    
}


