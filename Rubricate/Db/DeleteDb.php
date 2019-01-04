<?php

namespace Rubricate\Db;

use Rubricate\Db\Filter\RawFilterDb;
use Rubricate\Db\Filter\AbstractFilterDb;

class DeleteDb extends AbstractFilterDb implements IGetInstructionDb
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
                new RawFilterDb(sprintf('LIMIT %d', $max))
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

