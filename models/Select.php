<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 10/02/2017
 * Time: 13:17
 */


class Select
{
    public static function sinodos()
    {
        $sql = "SELECT nome,sigla FROM sinodos";
        return $sql;
    }
}