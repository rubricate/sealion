<?php 

namespace Rubricate\Db\Value;


class FloatValueDb implements IGetValueDb
{
    private $value;

    public function __construct($value)
    {
        self::setValue($value);
    }


    public function getValue()
    {
        return $this->value;
    } 


    private function setValue($value)
    {
        $this->value = (float) $value;

        return $this;
    } 


}




