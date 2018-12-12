<?php 

namespace Rubricate\Db\Filter;

interface IFilterListDb extends IFilterDb
{
    public function add(IFilterDb $f);
    public function expOr();
    public function expAnd();
}

