<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 10/02/2017
 * Time: 00:11
 */
$nome="";
$sigla="";
$nome = $_POST['nome'];
$sigla = $_POST['sigla'];

if (isset($_POST)){
    echo $nome."</br>";
    echo $sigla;
}