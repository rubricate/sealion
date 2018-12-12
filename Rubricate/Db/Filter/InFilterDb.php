<?php

namespace Rubricate\Db\Filter;

use Rubricate\Db\Value\ValidatorValueDb;

class InFilterDb extends AbstractEnableWhereFilterDb
{
    private $filter;

    public function __construct($value) 
    {
        $v = new ValidatorValueDb();

        if ($v->isValidObj($value)) {
            $value = $value->getvalue();
        }

        $this->filter = new RawFilterDb(sprintf('IN (%s)', $value));
    }


    public function getFilter()
    {
        return $this->filter->getFilter();
    }


}

