<?php

namespace Rubricate\Sealion;

use Rubricate\Sealion\Filter\RawFilterSealion;
use Rubricate\Sealion\Filter\AbstractFilterSealion;

class DeleteSealion extends AbstractFilterSealion implements IGetInstructionSealion
{
    private $e;
    
    public function __construct($table) 
    {
        $this->e = $table;
    }


    public function setMaxResults($max)
    {
        $max = (int) $max;

        if($max){
        
            parent::addFilter(
                new RawFilterSealion(sprintf('LIMIT %d', $max))
            );
        }

        return $this;
    } 
    
    
    public function getInstruction() 
    {
        if (!parent::isFilter()) {
            throw new \Exception("Filter not found.\n");
        }

        $str    = 'DELETE FROM %s %s%s';
        $filter = implode('', parent::getFilter());
        
      return sprintf($str, $this->e, PHP_EOL, $filter) ;
    }
    

}

