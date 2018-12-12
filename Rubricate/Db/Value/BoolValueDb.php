<?php 

namespace Rubricate\Db\Value;


class BoolValueDb implements IGetValueDb
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
        $this->value = ((bool) $value)? 'TRUE': 'FALSE';

        return $this;
    } 
    
    
}




