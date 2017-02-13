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
        $sql = "SELECT id_sinodo AS id,nome,sigla FROM sinodos ORDER BY id";
        return $sql;
    }

    public static function cidades(){
        $cidades ='select * from cidades';
        return $cidades;
    }

    public static function cidadesIdEstado($id_estado)
    {
        $cidades = "SELECT * FROM cidades WHERE id_estado=$id_estado";
        return $cidades;
    }

    public static function estados(){
        $estados ='select * from estados';
        return $estados;
    }

    public static function presbiterios()
    {
        $sql = "SELECT id_presbiterio as id,nome,sigla FROM presbiterios";
        return $sql;
    }

    public static function presbiteriosIdSinodos($id)
    {
        $sql = "SELECT * FROM presbiterios WHERE id_sinodo = $id";
        return $sql;
    }

    public static function igrejas()
    {
        $sql = "SELECT * FROM igrejas";
        return $sql;
    }

    public static function presbiteros()
    {
        $sql = "SELECT * FROM presbiteros";
        return $sql;
    }

    public static function presbiteriosGrid()
    {
        $sql = "SELECT        id_presbiterio      AS id,
                              sinodos.nome        AS sinodos,
                              presbiterios.nome   AS presbiterios,
                              presbiterios.sigla  AS sigla
                FROM          presbiterios, sinodos
                WHERE         presbiterios.id_sinodo = sinodos.id_sinodo";
        return $sql;
    }
}