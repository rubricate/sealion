<?php 

namespace Rubricate\Sealion\Value;


class ArrValueSealion implements IGetValueSealion
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
        if (is_array($value)) {
            $arr = array();

            foreach ($value as $row) {
                $arr[] = (!is_string($row))? $row: "'{$row}'";
            }
             
            $value = implode(', ', $arr);
        }

        $this->value = $value;


        return $this;
    } 
    
    
}

