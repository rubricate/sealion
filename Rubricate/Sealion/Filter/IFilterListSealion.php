<?php 

namespace Rubricate\Sealion\Filter;

interface IFilterListSealion extends IFilterSealion
{
    public function add(IFilterSealion $f);
    public function expOr();
    public function expAnd();
}

