<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 12/02/2017
 * Time: 16:36
 */

if (isset($_POST['nome']))
{

    $idPresbiterio = $_POST['idPresbiterio'];
    $nome = $_POST['nome'];
    $tipoPresbitero = $_POST['tipoPresbitero'];
    $endereco = $_POST['endereco'];
    $enderecoNumero = $_POST['enderecoNumero'];
    $enderecoComplemento = $_POST['enderecoComplemento'];
    $enderecoBairro = $_POST['enderecoBairro'];
    $estados = $_POST['estados'];
    $cidades = $_POST['cidades'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $fax = $_POST['fax'];
    $cxpostal = $_POST['cxpostal'];
    $email = $_POST['email'];
}