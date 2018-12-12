<?php

namespace Rubricate\Db\Filter;

interface IFilterDb extends IGetFilterDb
{
    public function isWhere();
}

