<?php

namespace Rubricate\Db\Filter;

use Rubricate\Db\Value\ValidatorValueDb;

class FilterDb extends AbstractEnableWhereFilterDb
{
    private $filter;

    public function __construct($key, $value)  
    {
        self::init($key, $value);
    }


    public function getFilter()
    {
        return $this->filter;
    }


    private function init($key, $value)
    {

        $v   = new ValidatorValueDb();
        $is  = self::isOperatorTo($key);

        $key = (!$is) ? $key . ' = ': $key . ' ';


        if ($v->isValidObj($value)) {
            $value = $value->getvalue();
        }

        $this->filter = $key . $value;

    } 



	private function isOperatorTo($str)
	{
        $match = '/(<|>|!|=|\sIS NULL|\sIS NOT NULL|\sEXISTS|\sBETWEEN|\sLIKE|\sIN\s*\(|\s)/i';

        return (bool) preg_match($match, trim($str));
	}


}

