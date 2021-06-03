<?php

namespace Rubricate\Sealion;

use Rubricate\Sealion\Filter\IFilterSealion;
use Rubricate\Sealion\Value\ValidatorValueSealion;
use Rubricate\Sealion\Filter\AbstractFilterSealion;

class UpdateSealion extends AbstractFilterSealion implements IGetInstructionSealion
{
    private $c = array();
    private $e, $f, $v;

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


    public function setMaxResults($max)
    {
        if($max){
        
            parent::addFilter(
                new RawFilterSealion(sprintf('LIMIT %d', $max))
            );
        }

        return $this;
    } 


    public function getInstruction() 
    {
        if(!parent::isFilter()) {
            throw new \Exception("Filter not found\n");
        }


        if (!count($this->c)) {
            throw new \Exception("set not found.\n");
        }

            $c = [];

            foreach($this->c as $key => $value) {
                $c[] = $key . ' = ' . $value;
            }

            $keyValue = implode(',' . PHP_EOL, $c);

            
            return sprintf("UPDATE %s SET \n%s \n%s", 
                $this->e, 
                $keyValue, 
                implode('', parent::getFilter())
            );
    }


}

