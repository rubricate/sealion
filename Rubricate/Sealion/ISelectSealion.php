<?php 

namespace Rubricate\Sealion;

use Rubricate\Sealion\Filter\IFilterSealion;

interface ISelectSealion extends IGetResultSealion
{
    public function addFilter(IFilterSealion $c);
    public function column($propertyName, $as);
    public function expOr();
    public function expAnd();
    public function setMaxResults($int);
    public function setFirstResult($int);
    public function setOrder(array $order);

}

