<?php 


namespace Rubricate\DataRecord\Filter;


class FilterRecordFactory extends AbstractFilterRecordFactory
{


    public function in($value)
    {
        return new InFilterRecord($value);
    } 


    public function notIn($value)
    {
        return new NotInFilterRecord($value);
    } 


    public function between($key, $start, $end)
    {
        return new BetweenFilterRecord($key, $start, $end);
    } 


    public function equalTo($key, $value)
    {
        return new EqualToFilterRecord($key, $value);
    } 



    public function greaterThanOrEqualTo($key, $value)
    {
        return new GreaterThanOrEqualToFilterRecord($key, $value);
    } 



    public function greaterThan($key, $value)
    {
        return new GreaterThanFilterRecord($key, $value);
    } 



    public function groupBy($property)
    {
        return new GroupByFilterRecord($property);
    } 



    public function having($having)
    {
        return new HavingFilterRecord($having);
    } 



    public function groupByHaving($groupBy, $having)
    {
        return new GroupByHavingFilterRecord(
            self::groupBy($groupBy),
            self::having($having)
        );
    } 



    public function innerJoin($table, $key, $value)
    {
        return new InnerJoinFilterRecord($table, $key, $value);
    } 



    public function join($table, $key, $value)
    {
        return new JoinFilterRecord($table, $key, $value);
    } 



    public function leftJoin($table, $key, $value)
    {
        return new LeftJoinFilterRecord($table, $key, $value);
    } 



    public function leftOuterJoin($table, $key, $value)
    {
        return new LeftOuterJoinFilterRecord($table, $key, $value);
    } 



    public function lessThanOrEqualTo($key, $value)
    {
        return new LessThanOrEqualToFilterRecord($key, $value);
    } 



    public function lessThan($key, $value)
    {
        return new LessThanFilterRecord($key, $value);
    } 



    public function like($key, $value)
    {
        return new LikeFilterRecord($key, $value);
    } 



    public function notBetween($key, $start, $end)
    {
        return new NotBetweenFilterRecord($key, $start, $end);
    } 



    public function notLike($key, $value)
    {
        return new NotLikeFilterRecord($key, $value);
    } 



    public function outerJoin($table, $key, $value)
    {
        return new OuterJoinFilterRecord($table, $key, $value);
    } 



    public function rightOuterJoin($table, $key, $value)
    {
        return new RightOuterJoinFilterRecord($table, $key, $value);
    } 



    public function raw($raw)
    {
        return new RawFilterRecord($raw);
    } 

}    

