<?php 


namespace Rubricate\Sealion\Filter;


abstract class AbstractFilterFactorySealion
{

    abstract public function in($value);

    abstract public function notIn($value);

    abstract public function between($key, $start, $end);

    abstract public function equalTo($key, $value);

    abstract public function greaterThanOrEqualTo($key, $value);

    abstract public function greaterThan($key, $value);

    abstract public function groupBy($property);

    abstract public function having($having);

    abstract public function groupByHaving($groupBy, $having);

    abstract public function innerJoin($table, $key, $value);

    abstract public function join($table, $key, $value);

    abstract public function leftJoin($table, $key, $value);

    abstract public function leftOuterJoin($table, $key, $value);

    abstract public function lessThanOrEqualTo($key, $value);

    abstract public function lessThan($key, $value);

    abstract public function like($key, $value);

    abstract public function notBetween($key, $start, $end);

    abstract public function notLike($key, $value);

    abstract public function outerJoin($table, $key, $value);

    abstract public function rightOuterJoin($table, $key, $value);

    abstract public function raw($raw);

}    

