<?php 

namespace Rubricate\DataRecord\Value;


class ValidatorValueRecord
{
    public function isValidObj($value)
    {
        $interface   = 'Rubricate\DataRecord\Value\IGetValueRecord';
        $isObject    = (is_object($value));
        $isInterface = ($value instanceof $interface);


        if($isObject && !$isInterface) {
            throw new \Exception(
                sprintf(
                    "interface: '%s' not found.\n", $interface
                )
            );
        }


        return ($isInterface);

    } 
    
}    

