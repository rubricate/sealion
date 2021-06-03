<?php 

namespace Rubricate\Sealion\Value;


class IntValueSealion implements IGetValueSealion
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


