<?php 

namespace Rubricate\Sealion;

class SqlFactorySealion
{

    public function select($table)
    {
        return new SelectSealion($table);
    } 


    public function insert($table)
    {
        return new InsertSealion($table);
    } 


    public function update($table)
    {
        return new UpdateSealion($table);
    } 


    public function delete($table)
    {
        return new DeleteSealion($table);
    } 


}    

