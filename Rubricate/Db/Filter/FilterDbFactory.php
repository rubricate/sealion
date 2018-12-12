<?php 


namespace Rubricate\Db\Filter;


class FilterDbFactory extends AbstractFilterDbFactory
{


    public function in($value)
    {
        return new InFilterDb($value);
    } 


    public function notIn($value)
    {
        return new NotInFilterDb($value);
    } 


    public function between($key, $start, $end)
    {
        return new BetweenFilterDb($key, $start, $end);
    } 


    public function equalTo($key, $value)
    {
        return new EqualToFilterDb($key, $value);
    } 



    public function greaterThanOrEqualTo($key, $value)
    {
        return new GreaterThanOrEqualToFilterDb($key, $value);
    } 



    public function greaterThan($key, $value)
    {
        return new GreaterThanFilterDb($key, $value);
    } 



    public function groupBy($property)
    {
        return new GroupByFilterDb($property);
    } 



    public function having($having)
    {
        return new HavingFilterDb($having);
    } 



    public function groupByHaving($groupBy, $having)
    {
        return new GroupByHavingFilterDb(
            self::groupBy($groupBy),
            self::having($having)
        );
    } 



    public function innerJoin($table, $key, $value)
    {
        return new InnerJoinFilterDb($table, $key, $value);
    } 



    public function join($table, $key, $value)
    {
        return new JoinFilterDb($table, $key, $value);
    } 



    public function leftJoin($table, $key, $value)
    {
        return new LeftJoinFilterDb($table, $key, $value);
    } 



    public function leftOuterJoin($table, $key, $value)
    {
        return new LeftOuterJoinFilterDb($table, $key, $value);
    } 



    public function lessThanOrEqualTo($key, $value)
    {
        return new LessThanOrEqualToFilterDb($key, $value);
    } 



    public function lessThan($key, $value)
    {
        return new LessThanFilterDb($key, $value);
    } 



    public function like($key, $value)
    {
        return new LikeFilterDb($key, $value);
    } 



    public function notBetween($key, $start, $end)
    {
        return new NotBetweenFilterDb($key, $start, $end);
    } 



    public function notLike($key, $value)
    {
        return new NotLikeFilterDb($key, $value);
    } 



    public function outerJoin($table, $key, $value)
    {
        return new OuterJoinFilterDb($table, $key, $value);
    } 



    public function rightOuterJoin($table, $key, $value)
    {
        return new RightOuterJoinFilterDb($table, $key, $value);
    } 



    public function raw($raw)
    {
        return new RawFilterDb($raw);
    } 

}    

