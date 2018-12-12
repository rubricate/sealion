<?php 

namespace Rubricate\Db\Value;


class ValidatorValueDb
{
    public function isValidObj($value)
    {
        $interface   = 'Rubricate\Db\Value\IGetValueDb';
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

