<?php 

namespace Rubricate\Db;

class SqlDbFactory
{

    public function select($table)
    {
        return new SelectDb($table);
    } 


    public function insert($table)
    {
        return new InsertDb($table);
    } 


    public function update($table)
    {
        return new UpdateDb($table);
    } 


    public function delete($table)
    {
        return new DeleteDb($table);
    } 


}    

