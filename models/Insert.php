<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 10/02/2017
 * Time: 13:16
 */

class Insert
{
    public static function sinodos($nome,$sigla)
    {
        $sql = "INSERT INTO sinodos (nome,sigla) VALUES ('$nome','$sigla')";
        return $sql;
    }

    public static function presbiterios($idSinodo,$nome,$sigla)
    {
        $sql = "INSERT INTO presbiterios (id_sinodo,nome,sigla) VALUES ('$idSinodo','$nome','$sigla')";
        return $sql;
    }
}