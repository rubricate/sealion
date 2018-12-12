<?php 

namespace Rubricate\Db;

use Rubricate\Db\Filter\IFilterDb;

interface ISelectDb extends IGetResultDb
{
    public function addFilter(IFilterDb $c);
    public function column($propertyName, $as);
    public function expOr();
    public function expAnd();
    public function setMaxResults($int);
    public function setFirstResult($int);
    public function setOrder(array $order);

}

