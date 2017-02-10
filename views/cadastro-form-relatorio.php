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
<form id="form1" name="form1" method="post" action="">
  <table width="95%" border="0" align="center">
    <tr>
    <td rowspan="4" width="150"><img src="img/ipb_logo.png" borde="0"></td>
    <td colspan="7"><h1 class="h1-form-titulo">informações cadastrais e estatísticas de comunidade presbiteriana</h1></td>
  </tr>
  <tr>
    <td colspan="2" class="p-header">sinodo</td>
    <td colspan="3"></td>
    <td class="p-header" colspan="2" rowspan="3">siglas </td>
  </tr>
  <tr>
    <td colspan="2" class="p-header">presbitério</td>
    <td colspan="3"></td>
  </tr>
  <tr>
    <td colspan="5" class="p-header">ano </td>
  </tr>
    
  </table>
    
    <!-----------------*************** TABELA IDENTIFICAÇÃO DA IGREJA ***************----------------->
    
    <table width="95%" border="0" align="center">
     <tr>
    <td colspan="8"> <h1 class="h1-form-titulo tr-titulo-h1"> I - identificação da igreja / congregação presbiterial</h1> </td> 
    </tr>   
    </table>
    
    <table width="95%" border="0" align="center">
   
    <tr class="tr-texto-i">
    <td>nome (igreja/congregação)</td>
    <td colspan="8"><input type="text" required="required" name="idIgreja" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
  </tr>
  <tr class="tr-texto-i">
    <td width="103">Endereço</td>
    <td colspan="3"><input type="text" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
    <td width="43">número</td>
    <td width="53"><input type="text" required="required" name="number" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td width="84">complemento</td>
    <td colspan="2"><input type="text" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
  </tr>
  <tr class="tr-texto-i">
    <td>bairro</td>
    <td width="96"><input type="text" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
    <td width="43">cidade</td>
    <td colspan="2"><input type="text" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
    <td>uf</td>
    <td><input type="text" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
    <td width="22">cep</td>
    <td width="148"><input type="text" required="required" name="number" class=input-relatorio-i pattern="[0-9]+$" /></td>
  </tr>
  <tr class="tr-texto-i">
    <td>telefone</td>
    <td><input type="text" required="required" name="number" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td>fax</td>
    <td colspan="2"><input type="text" required="required" name="number" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td>e-mail</td>
    <td colspan="3"><input type="email" required="required" name="text" class="input-relatorio-txt" /></td>
  </tr>
  <tr class="tr-texto-i">
    <td>data organização</td>
    <td><input type="text" required="required" name="number" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td>cnpj</td>
    <td width="140"><input type="text" required="required" name="number" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td>n&deg; de ordem</td>
    <td><input type="text" required="required" name="number" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td>website</td>
    <td colspan="2"><input type="url" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
  </tr>
    
  </table>
    
      
    <!-----------------*************** TABELA INFORMAÇÕES DO TRABALHO ***************----------------->
    
    <table width="95%" border="0" align="center">
     <tr>
    <td colspan="8"> <h1 class="h1-form-titulo tr-titulo-h1"> II - INFORMAÇÕES DO TRABALHO</h1> </td> 
    </tr>   
    </table>
    
   <table width="95%" border="0"  align="center">
  <tr class="tr-texto-ii">
    <td width="196">as info. prestadas se relacionam</td>
    <td width="136"><input type="url" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
    <td colspan="2">sede e cogregações</td>
    <td width="243" colspan="2"><input type="url" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
  </tr>
  <tr class="tr-texto-ii">
    <td>comentários</td>
    <td colspan="5"><input type="url" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
  </tr>
</table>
    
     <!-----------------*************** ESTRUTURA DA COMUNIDADE PRESBITERIANA ***************----------------->
    
    <table width="95%" border="0" align="center">
     <tr>
    <td colspan="8"> <h1 class="h1-form-titulo tr-titulo-h1"> III - ESTRUTURA DA COMUNIDADE PRESBITERIANA</h1> </td> 
    </tr>   
    </table>
    
   <table width="95%" border="0"  align="center">
   <tr>
        <td colspan="2"> <h2 class="h2-form-titulo tr-titulo-h2"> liderança formal</h2> </td>
        <td colspan="4"> <h2 class="h2-form-titulo tr-titulo-h2"> estrutura do trabalho</h2> </td>
        <td colspan="2"> <h2 class="h2-form-titulo tr-titulo-h2"> departamentos internos</h2> </td>
      </tr>
      <tr class="tr-texto">
        <td>pastores</td>
          <td> 
              <input type="text" name="pastores" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>congregações da igreja</td>
          <td>
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de Educandários </td>
          <td> 
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/></td>
          <td>Nº de deptos</br>UCP <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de membros</br> <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
      </tr>
     <tr class="tr-texto">
        <td>licenciados</td>
          <td> 
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>pontos de pregação</td>
          <td>
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº total de alunos educand. </td>
          <td> 
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/></td>
          <td>upa <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td><input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
      </tr>
   
    <tr>
        <tr class="tr-texto">
        <td>presbíteros</td>
          <td> 
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de escolas dominicais</td>
          <td>
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de creches </td>
          <td> 
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/></td>
          <td>ump <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td><input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
      </tr>
     <tr class="tr-texto">
        <td>diáconos</td>
          <td> 
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de professores / E.B.D.</td>
          <td>
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº total de crianças </td>
          <td> 
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/></td>
          <td>saf <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td><input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
      </tr>
     <tr class="tr-texto">
        <td>evangelistas</td>
          <td> 
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de alunos/ed - ano atual</td>
          <td>
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de outros &#42; </td>
          <td> 
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/></td>
          <td>uph <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td><input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
      </tr>
     <tr class="tr-texto">
        <td>missionários</td>
          <td> 
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de alunos/ed - ano anterior</td>
          <td>
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº total </td>
          <td> 
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/></td>
          <td>outra <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td><input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
      </tr>
     <tr class="tr-texto">
        <td>candidatos</td>
          <td> 
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>variação percentual - ed</td>
          <td>
              <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td></td>
          <td></td>
          <td>totais <input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td><input type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
      </tr>
</table>
    
    
</form>
</div>

</body>
</html>