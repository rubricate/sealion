<?php  

namespace Rubricate\DataRecord\Filter; 


abstract class AbstractFilterRecord
{

    protected $filter = array();
    private $count  = 0;


    public function setFilter(IFilterRecord $c)
    {
        $f = $c->getFilter();

        if($c->isWhere() && $this->count < 1){
            $f = 'WHERE ' . $f;
            $this->count++;
        }

        $this->filter[] = $f . " " . PHP_EOL;
        return $this;
    } 


    public function operatorOr()
    {
        $this->filter[] = 'OR ';
        return $this;
    } 



    public function operatorAnd()
    {
        $this->filter[] = 'AND ';
        return $this;
    } 



    public function setMaxResults($max)
    {
        if($max){
            $this->filter[] = sprintf('LIMIT %d ', $max);
        }

        return $this;
    } 


    public function isWhere()
    {
       return false; 
    } 


}

