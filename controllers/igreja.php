<?php require_once "../models/Crud.php";
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 10/02/2017
 * Time: 00:11
 */


if (isset($_POST['idSinodo']))
{
    $idPresbiterio = $_POST['idPresbiterio'];
    $idCidade = $_POST['idCidade'];
    $nome = strtolower($_POST['nome']);
    $cnpj = $_POST['cnpj'];
    $cep = $_POST['cep'];
    $endereco = strtolower($_POST['endereco']);
    $enderecoComplemento = strtolower($_POST['enderecoComplemento']);
    $enderecoNumero = $_POST['enderecoNumero'];
    $enderecoBairro = strtolower($_POST['enderecoBairro']);
    $cxPostal = $_POST['cxPostal'];
    $email = strtolower($_POST['email']);
    $fax = $_POST['fax'];
    $telefone = $_POST['telefone'];
    $nroOrdem = $_POST['nroOrdem'];
    $homepage = strtolower($_POST['homepage']);
    $dataOrganizacao = $_POST['dataOrganizacao'];
    Crud::insert(Insert::igrejas($idPresbiterio,$idCidade,$nome,$cnpj,$cep,$endereco,$enderecoComplemento,$enderecoNumero,$enderecoBairro,
        $cxPostal,$email,$fax,$telefone,$nroOrdem,$homepage,$dataOrganizacao
    ));
}