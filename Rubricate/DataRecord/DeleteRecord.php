<?php

namespace Rubricate\DataRecord;

use Rubricate\DataRecord\Filter\RawFilterRecord;
use Rubricate\DataRecord\Filter\AbstractFilterRecord;

class DeleteRecord extends AbstractFilterRecord implements IGetInstructionRecord
{
    private $e;
    
    public function __construct($table) 
    {
        $this->e = $table;
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
        if (!$this->filter) {
            throw new \Exception("Filter not found.\n");
        }

        $str    = 'DELETE FROM %s %s%s';
        $filter = implode('', $this->filter);
        
      return sprintf($str, $this->e, PHP_EOL, $filter) ;
    }
    

}

