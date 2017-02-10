<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 10/02/2017
 * Time: 13:11
 */

namespace Models;


class Crud
{
    public static function select($arg){
        $pdo = new Pdoinit();
        $result = $pdo->prepare($arg);
        $result->execute();
        $resultado = $result->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }

    public static function insert($sql){
        $pdo = new Pdoinit();
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }
    public static function delete($sql){
        $pdo = new Pdoinit();
        $result = $pdo->prepare($sql);
        $result->execute();
    }

    public static function update($sql){
        $pdo = new Pdoinit();
        $result = $pdo->prepare($sql);
        $result->execute();
        return $result;
    }
}