<?php 

namespace Rubricate\DataRecord\Filter;

interface IFilterListRecord extends IFilterRecord
{
    public function add(IFilterRecord $f);
    public function expOr();
    public function expAnd();
}

