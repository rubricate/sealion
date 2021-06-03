<?php 

namespace Rubricate\Sealion\Value;


class StrValueSealion implements IGetValueSealion
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
        $value       = sprintf("'%s'", $value);
        $this->value = (string) $value;

        return $this;
    } 
    
    
}



