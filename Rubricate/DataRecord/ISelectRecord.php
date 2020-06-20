<?php 

namespace Rubricate\DataRecord;

use Rubricate\DataRecord\Filter\IFilterRecord;

interface ISelectRecord extends IGetResultRecord
{
    public function addFilter(IFilterRecord $c);
    public function column($propertyName, $as);
    public function expOr();
    public function expAnd();
    public function setMaxResults($int);
    public function setFirstResult($int);
    public function setOrder(array $order);

}

