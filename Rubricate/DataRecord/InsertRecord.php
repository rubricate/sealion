<?php

namespace Rubricate\DataRecord;

use Rubricate\DataRecord\Value\ValidatorValueRecord;

class InsertRecord implements IGetInstructionRecord
{
    private $e, $v, $column = array();

    public function __construct($table) { 
        $this->e = $table;
        $this->v = new ValidatorValueRecord();
    }


    public function setRow($key, $value)
    {
        if ($this->v->isValidObj($value)) {
            $value = $value->getvalue();
        }

        $this->column[$key] = $value;
        
        return $this;
    } 
    
    
    public function getInstruction() 
    {
        return sprintf("INSERT INTO %s \n(%s) \nVALUES \n(%s)\n", 
            $this->e, 
            implode(', ', array_keys($this->column)), 
            implode(', ', array_values($this->column))
        );
        
    }
    
}

