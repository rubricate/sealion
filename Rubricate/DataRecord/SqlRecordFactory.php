<?php 

namespace Rubricate\DataRecord;

class SqlRecordFactory
{

    public function select($table)
    {
        return new SelectRecord($table);
    } 


    public function insert($table)
    {
        return new InsertRecord($table);
    } 


    public function update($table)
    {
        return new UpdateRecord($table);
    } 


    public function delete($table)
    {
        return new DeleteRecord($table);
    } 


}    

