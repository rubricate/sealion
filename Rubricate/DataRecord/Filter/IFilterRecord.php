<?php

namespace Rubricate\DataRecord\Filter;

interface IFilterRecord extends IGetFilterRecord
{
    public function isWhere();
}

