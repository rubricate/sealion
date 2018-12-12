<?php

namespace Rubricate\Db\Value;


class ValueDbFactory
{

    public function arr($value)
    {
        return new ArrValueDb($value);
    } 


    public function bool($value)
    {
        return new BoolValueDb($value);
    } 


    public function float($value)
    {
        return new FloatValueDb($value);
    } 


    public function int($value)
    {
        return new IntValueDb($value);
    } 


    public function str($value)
    {
        return new StrValueDb($value);
    } 


}    

