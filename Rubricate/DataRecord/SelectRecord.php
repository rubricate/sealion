<?php

namespace Rubricate\DataRecord;

use Rubricate\DataRecord\Filter\AbstractFilterRecord;

class SelectRecord extends AbstractFilterRecord implements IGetInstructionRecord
{
    private $entity, $column = array();

    public function __construct($table) 
    {
        $this->entity = $table;
    }


    public function addColumn($name)
    {
        $this->column[] = $name;

        return $this;
    } 


    public function setFirstResult($int)
    {
        if($int){

            $this->filter[] = sprintf('OFFSET %d ', $int);
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
        if (!$this->filter) {
            throw new \Exception("filter not found.\n");
        }


        $str    = "SELECT \n%s \nFROM \n%s \n%s";
        $column = ' * ';
        $filter = implode('', $this->filter);

        if(count($this->column)){
            $column  = implode(", \n", $this->column);
        }


        return sprintf($str, $column, $this->entity, $filter);
    }

}

