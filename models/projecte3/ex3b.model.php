<?php
/**
 * Created by PhpStorm.
 * User: francescroy
 * Date: 25/02/16
 * Time: 10:57
 */

class Projecte3Ex3bModel extends Model{

    public function executaUnInsert($nombre, $tipo,$url)
    {

        $query="insert into Instrumento (nombre,tipo,url) values (\"$nombre\",\"$tipo\",\"$url\")";

        $this->execute($query);


    }

    public function retornaTot()
    {

        $query="select * from Instrumento";

        $result = $this->getAll( $query );

        return $result;


    }






}