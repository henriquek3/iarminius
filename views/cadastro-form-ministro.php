<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iArminius</title>
<link href="estilo.css" rel="stylesheet" />
</head>
<body>
    
<div id="table-form" class="table-form">
<?php include("menu.php") ?>
<form id="form1" name="form1" method="post" action="controllers/arquivo">
 
    
    <!-----------------*************** TABELA IDENTIFICAÇÃO DA IGREJA ***************----------------->
    
    <table width="95%" border="0" align="center">
     <tr>
    <td colspan="8"> <h1 class="h1-form-titulo tr-titulo-h1"> cadastrar ministro</h1> </td> 
    </tr>   
    </table>
    
   <table width="95%" border="0" align="center">
   
    <tr class="tr-texto-i">
    <td>nome</td>
    <td colspan="5"><input type="text" required="required" name="nome" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
    <td>Tipo</td>
    <td><label for="tipoPresbitero"></label>
      <select name="tipoPresbitero" id="tipoPresbitero">
        <option value="0">Presbítero</option>
        <option value="1">Pastor</option>
      </select></td>
    </tr>
  <tr class="tr-texto-i">
    <td width="164">Endereço</td>
    <td colspan="2"><input type="text" required="required" name="endereco" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
    <td width="170">&nbsp;</td>
    <td width="92">número</td>
    <td width="759"><input type="text" required="required" name="enderecoNumero" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td width="81">complemento</td>
    <td><input type="text" required="required" name="enderecoComplemento" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
  </tr>
  <tr class="tr-texto-i">
    <td>bairro</td>
    <td width="147"><input type="text" required="required" name="enderecoBairro" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
    <td width="41">uf</td>
    <td><select name="estado">
            <option value="uf">UF</option>
        </select></td>
    <td >cidade</td>
    <td>
        <select name="cidade">
            <option value="cidade">Selecione sua cidade</option>
        </select></td>
    <td>cep</td>
    
    <td><input type="text" required="required" name="cep" class=input-relatorio-i pattern="[0-9]+$" /></td>
    </tr>
  <tr class="tr-texto-i">
    <td>telefone</td>
    <td><input type="text" required="required" name="telefone" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td>fax</td>
    <td colspan="1"><input type="text" required="required" name="fax" class=input-relatorio-i pattern="[0-9]+$" /></td>
       <td>Cx. Postal</td>
    <td colspan="1"><input type="text" required="required" name="cxpostal" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td>e-mail</td>
    <td colspan="2"><input type="email" required="required" name="email" class="input-relatorio-txt" /></td>
  </tr>
    
  </table>
    
    <table width="95%" border="0" align="center">
<tr>
    <td class="td-btn"><input type="submit" name="btn-enviar" class="btn-form-cadastro" id="btn-enviar" value="Cadastrar" /></td>
</tr>
    </table>
</form>
</div>

</body>
</html>