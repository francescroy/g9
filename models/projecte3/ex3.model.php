<?php
/**
 * Created by PhpStorm.
 * User: francescroy
 * Date: 25/02/16
 * Time: 10:57
 */

class Projecte3Ex3Model extends Model{

    public function executaUnRemove()
    {

        $query="drop table Estudiante";

        $this->execute($query);


    }






}