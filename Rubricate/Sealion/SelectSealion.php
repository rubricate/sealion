<?php

namespace Rubricate\Sealion;

use Rubricate\Sealion\Filter\AbstractFilterSealion;

class SelectSealion extends AbstractFilterSealion implements IGetInstructionSealion
{
    private $entity, $column = array();

    public function __construct($table) 
    {
        $this->entity = $table;
    }


    public function column($name)
    {
        $this->column[] = $name;

        return $this;
    } 


    public function setFirstResult($offset)
    {
        $offset = (int) $offset;

        if($offset){
            $this->filter[] = sprintf('OFFSET %d ', $offset);
        }

        return $this;
    } 


    public function setOrder(array $order)
    {
        if(count($order)){

        $arr = array();
        foreach ($order as $k => $v) {
            $arr[] = $k . ' ' . strtoupper($v);
        }

        $orderBy = implode(', ', $arr);

        $this->filter[] = sprintf('ORDER BY %s ', $orderBy);

        }


        return $this;
    } 


    public function getInstruction() 
    {
        if (!parent::isFilter()) {
            throw new \Exception("filter not found.\n");
        }


        $str    = "SELECT \n%s \nFROM \n%s \n%s";
        $column = ' * ';
        $filter = implode('', parent::getFilter());

        if(count($this->column)){
            $column  = implode(", \n", $this->column);
        }


        return sprintf($str, $column, $this->entity, $filter);
    }

}

