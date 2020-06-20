<?php

namespace Rubricate\DataRecord\Value;


class ValueRecordFactory
{

    public function arr($value)
    {
        return new ArrValueRecord($value);
    } 


    public function bool($value)
    {
        return new BoolValueRecord($value);
    } 


    public function float($value)
    {
        return new FloatValueRecord($value);
    } 


    public function int($value)
    {
        return new IntValueRecord($value);
    } 


    public function str($value)
    {
        return new StrValueRecord($value);
    } 


}    

