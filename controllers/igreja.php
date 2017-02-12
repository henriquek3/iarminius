<?php
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 10/02/2017
 * Time: 00:11
 */
echo "<h1>Teste</h1>";

echo "<br>".$idPresbiterio = $_POST['idPresbiterio'];
echo "<br>".$idCidade = $_POST['cidade'];
echo "<br>".$nome = ucfirst($_POST['nome']);
echo "<br>".$cnpj = $_POST['cnpj'];
echo "<br>".$cep = $_POST['cep'];
echo "<br>".$endereco = ucfirst($_POST['endereco']);
echo "<br>".$enderecoComplemento = ucfirst($_POST['enderecoComplemento']);
echo "<br>".$enderecoNumero = $_POST['enderecoNumero'];
echo "<br>".$enderecoBairro = ucfirst($_POST['enderecoBairro']);
echo "<br>".$cxPostal = $_POST['cxPostal'];
echo "<br>".$email = $_POST['email'];
echo "<br>".$fax = $_POST['fax'];
echo "<br>".$telefone = $_POST['telefone'];
echo "<br>".$nroOrdem = $_POST['nroOrdem'];
echo "<br>".$homepage = $_POST['homepage'];
echo "<br>".$dataOrganizacao = $_POST['dataOrganizacao'];
echo "<hr/>";
var_dump($_POST);