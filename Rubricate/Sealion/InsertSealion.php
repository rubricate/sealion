<?php

namespace Rubricate\Sealion;

use Rubricate\Sealion\Value\ValidatorValueSealion;

class InsertSealion implements IGetInstructionSealion
{
    private $e, $v, $c = array();

    public function __construct($table) { 
        $this->e = $table;
        $this->v = new ValidatorValueSealion();
    }


    public function set($key, $value)
    {
        if ($this->v->isValidObj($value)) {
            $value = $value->getvalue();
        }

        $this->c[$key] = $value;
        
        return $this;
    } 
    
    
    public function getInstruction() 
    {
        return sprintf("INSERT INTO %s \n(%s) \nVALUES \n(%s)\n", 
            $this->e, 
            implode(', ', array_keys($this->c)), 
            implode(', ', array_values($this->c))
        );
        
    }
    
}

