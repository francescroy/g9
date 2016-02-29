<?php
/**
 * Created by PhpStorm.
 * User: francescroy
 * Date: 25/02/16
 * Time: 10:57
 */

class Projecte2Ex2Model extends Model{

    public function executaUnRemove()
    {

        $query="drop table Estudiante";

        $this->execute($query);


    }






}