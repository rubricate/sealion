<?php 


namespace Rubricate\Sealion\Filter;


class FilterFactorySealion extends AbstractFilterFactorySealion
{


    public function in($value)
    {
        return new InFilterSealion($value);
    } 


    public function notIn($value)
    {
        return new NotInFilterSealion($value);
    } 


    public function between($key, $start, $end)
    {
        return new BetweenFilterSealion($key, $start, $end);
    } 


    public function equalTo($key, $value)
    {
        return new EqualToFilterSealion($key, $value);
    } 



    public function greaterThanOrEqualTo($key, $value)
    {
        return new GreaterThanOrEqualToFilterSealion($key, $value);
    } 



    public function greaterThan($key, $value)
    {
        return new GreaterThanFilterSealion($key, $value);
    } 



    public function groupBy($property)
    {
        return new GroupByFilterSealion($property);
    } 



    public function having($having)
    {
        return new HavingFilterSealion($having);
    } 



    public function groupByHaving($groupBy, $having)
    {
        return new GroupByHavingFilterSealion(
            self::groupBy($groupBy),
            self::having($having)
        );
    } 



    public function innerJoin($table, $key, $value)
    {
        return new InnerJoinFilterSealion($table, $key, $value);
    } 



    public function join($table, $key, $value)
    {
        return new JoinFilterSealion($table, $key, $value);
    } 



    public function leftJoin($table, $key, $value)
    {
        return new LeftJoinFilterSealion($table, $key, $value);
    } 



    public function leftOuterJoin($table, $key, $value)
    {
        return new LeftOuterJoinFilterSealion($table, $key, $value);
    } 



    public function lessThanOrEqualTo($key, $value)
    {
        return new LessThanOrEqualToFilterSealion($key, $value);
    } 



    public function lessThan($key, $value)
    {
        return new LessThanFilterSealion($key, $value);
    } 



    public function like($key, $value)
    {
        return new LikeFilterSealion($key, $value);
    } 



    public function notBetween($key, $start, $end)
    {
        return new NotBetweenFilterSealion($key, $start, $end);
    } 



    public function notLike($key, $value)
    {
        return new NotLikeFilterSealion($key, $value);
    } 



    public function outerJoin($table, $key, $value)
    {
        return new OuterJoinFilterSealion($table, $key, $value);
    } 



    public function rightOuterJoin($table, $key, $value)
    {
        return new RightOuterJoinFilterSealion($table, $key, $value);
    } 



    public function raw($raw)
    {
        return new RawFilterSealion($raw);
    } 

}    

