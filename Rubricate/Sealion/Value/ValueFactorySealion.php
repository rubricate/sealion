<?php

namespace Rubricate\Sealion\Value;


class ValueFactorySealion
{

    public function arr($value)
    {
        return new ArrValueSealion($value);
    } 


    public function bool($value)
    {
        return new BoolValueSealion($value);
    } 


    public function float($value)
    {
        return new FloatValueSealion($value);
    } 


    public function int($value)
    {
        return new IntValueSealion($value);
    } 


    public function str($value)
    {
        return new StrValueSealion($value);
    } 


}    

