<?php 

namespace Rubricate\Sealion\Value;


class ValidatorValueSealion
{
    public function isValidObj($value)
    {
        $interface   = 'Rubricate\Sealion\Value\IGetValueSealion';
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

