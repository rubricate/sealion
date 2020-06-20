<?php

namespace Rubricate\DataRecord;

use Rubricate\DataRecord\Filter\IFilterRecord;
use Rubricate\DataRecord\Value\ValidatorValueRecord;
use Rubricate\DataRecord\Filter\AbstractFilterRecord;

class UpdateRecord extends AbstractFilterRecord implements IGetInstructionRecord
{
    private $column = array();
    private $e, $f, $v;

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


    public function setMaxResults($max)
    {
        if($max){
        
            parent::addFilter(
                new RawFilterRecord(sprintf('LIMIT %d', $max))
            );
        }

        return $this;
    } 


    public function getInstruction() 
    {
        if(!$this->filter) {
            throw new \Exception("Filter not found\n");
        }


        if (!count($this->column)) {
            throw new \Exception("set not found.\n");
        }

            $column = array();

            foreach($this->column as $key => $value) {
                $column[] = $key . ' = ' . $value;
            }

            $keyValue = implode(',' . PHP_EOL, $column);

            
            return sprintf("UPDATE %s SET \n%s \n%s", 
                $this->e, 
                $keyValue, 
                implode('', $this->filter)
            );
    }


}

