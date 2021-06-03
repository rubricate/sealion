<?php  

namespace Rubricate\Sealion\Filter; 


abstract class AbstractFilterSealion
{

    private $filter = array();
    private $count  = 0;


    public function addFilter(IFilterSealion $c)
    {
        $f = $c->getFilter();

        if($c->isWhere() && $this->count < 1){
            $f = 'WHERE ' . $f;
            $this->count++;
        }

        $this->filter[] = $f . " " . PHP_EOL;

        return $this;
    } 



    public function setMaxResults($limit)
    {
        $limit = (int) $limit;

        if($limit){
            $this->filter[] = sprintf('LIMIT %d ', $limit);
        }

        return $this;
    } 


    public function isWhere()
    {
       return false; 
    } 


    protected function getFilter()
    {
        return $this->filter;
    } 


    protected function isFilter()
    {
        return (count($this->filter) > 0);
    } 


}

