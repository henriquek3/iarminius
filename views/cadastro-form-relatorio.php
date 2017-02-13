<?php
require_once "../models/Crud.php";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iArminius</title>
<link href="estilo.css" rel="stylesheet" />
</head>

<body>
    <?php include("menu.php") ?>
<div id="table-form" class="table-form">
<form id="form1" name="form1" method="post" action="">
  <table width="95%" border="0" align="center">
    <tr>
    <td rowspan="4" width="150"><img src="img/ipb_logo.png" borde="0"></td>
    <td colspan="7"><h1 class="h1-form-titulo">informações cadastrais e estatísticas de comunidade presbiteriana</h1></td>
  </tr>
  <tr>
    <td colspan="2" class="p-header">sinodo</td>
    <td colspan="3"><label for="idSinodo"></label>
          <select name="idSinodo" id="idSinodo">
             <?php
                foreach (Crud::select(Select::sinodos()) as $key){
                    echo "<option value=\"{$key['id']}\">{$key['nome']}</option>";
                }
            ?>
          <!--<option value="0">Selecione o Sínodo</option> -->
        </select>
          <label for="idPresbiterio"></label>

    <td class="p-header" colspan="2" rowspan="3">siglas </td>
  </tr>
  <tr>
    <td colspan="2" class="p-header">presbitério</td>
    <td colspan="3"><select name="idPresbiterio" id="idPresbiterio">
           <?php
                foreach (Crud::select(Select::presbiterios()) as $key){
                    echo "<option value=\"{$key['id']}\">{$key['nome']}</option>";
                }
            ?>
          <!--<option value="0">Selecione o Presbitério</option> -->
        </select></td>
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
    <td colspan="8"><input required type="text" required="required" name="idIgreja" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
  </tr>
  <tr class="tr-texto-i">
    <td width="103">Endereço</td>
    <td colspan="3"><input required type="text" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
    <td width="43">número</td>
    <td width="53"><input required type="text" required="required" name="number" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td width="84">complemento</td>
    <td colspan="2"><input required type="text" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
  </tr>
  <tr class="tr-texto-i">
    <td>bairro</td>
    <td width="96"><input required type="text" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
    <td width="43">cidade</td>
    <td colspan="2"><input required type="text" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
    <td>uf</td>
    <td><input required type="text" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
    <td width="22">cep</td>
    <td width="148"><input required type="text" required="required" name="number" class=input-relatorio-i pattern="[0-9]+$" /></td>
  </tr>
  <tr class="tr-texto-i">
    <td>telefone</td>
    <td><input required type="text" required="required" name="number" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td>fax</td>
    <td colspan="2"><input required type="text" required="required" name="number" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td>e-mail</td>
    <td colspan="3"><input required type="email" required="required" name="text" class="input-relatorio-txt" /></td>
  </tr>
  <tr class="tr-texto-i">
    <td>data organização</td>
    <td><input required type="text" required="required" name="number" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td>cnpj</td>
    <td width="140"><input required type="text" required="required" name="number" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td>n&deg; de ordem</td>
    <td><input required type="text" required="required" name="number" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td>website</td>
    <td colspan="2"><input required type="url" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
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
    <td width="136"><input required type="url" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
    <td colspan="2">sede e cogregações</td>
    <td width="243" colspan="2"><input required type="url" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
  </tr>
  <tr class="tr-texto-ii">
    <td>comentários</td>
    <td colspan="5"><input required type="url" required="required" name="text" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
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
              <input required type="text" name="pastores" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>congregações da igreja</td>
          <td>
              <input required type="text" name="congregacoes" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de Educandários </td>
          <td> 
              <input required type="text" name="educandarios" pattern="[0-9]+$" required="required" class="input-relatorio"/></td>
          <td>Nº de deptos</br>UCP <input required type="text" name="ucpDpto" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de membros</br> <input required type="text" name="ucpMembro" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
      </tr>
     <tr class="tr-texto">
        <td>licenciados</td>
          <td> 
              <input required type="text" name="lecenciados" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>pontos de pregação</td>
          <td>
              <input required type="text" name="pontosPregacao" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº total de alunos educand. </td>
          <td> 
              <input required type="text" name="educandariosAlunos" pattern="[0-9]+$" required="required" class="input-relatorio"/></td>
          <td>upa <input required type="text" name="upaDpto" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td><input required type="text" name="upaMembro" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
      </tr>
   
    <tr>
        <tr class="tr-texto">
        <td>presbíteros</td>
          <td> 
              <input required type="text" name="presbiteros" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de escolas dominicais</td>
          <td>
              <input required type="text" name="ebds" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de creches </td>
          <td> 
              <input required type="text" name="creches" pattern="[0-9]+$" required="required" class="input-relatorio"/></td>
          <td>ump <input required type="text" name="umpDpto" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td><input required type="text" name="umpMembro" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
      </tr>
     <tr class="tr-texto">
        <td>diáconos</td>
          <td> 
              <input required type="text" name="diaconos" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de professores / E.B.D.</td>
          <td>
              <input required type="text" name="ebdsProfessores" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº total de crianças </td>
          <td> 
              <input required type="text" name="crechesCriancas" pattern="[0-9]+$" required="required" class="input-relatorio"/></td>
          <td>saf <input required type="text" name="safDpto" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td><input required type="text" name="safMembro" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
      </tr>
     <tr class="tr-texto">
        <td>evangelistas</td>
          <td> 
              <input required type="text" name="evangelistas" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de alunos/ed - ano atual</td>
          <td>
              <input required type="text" name="alunosEbdsAtual" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de outros &#42; </td>
          <td> 
              <input required type="text" name="outros" pattern="[0-9]+$" required="required" class="input-relatorio"/></td>
          <td>uph <input required type="text" name="uphDpto" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td><input required type="text" name="uphMembros" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
      </tr>
     <tr class="tr-texto">
        <td>missionários</td>
          <td> 
              <input required type="text" name="missionarios" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº de alunos/ed - ano anterior</td>
          <td>
              <input required type="text" name="alunosEbdsAnterior" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>Nº total </td>
          <td> 
              <input required type="text" name="total" pattern="[0-9]+$" required="required" class="input-relatorio"/></td>
          <td>outra <input required type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td><input required type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
      </tr>
     <tr class="tr-texto">
        <td>candidatos</td>
          <td> 
              <input required type="text" name="candidatos" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td>variação percentual - ed</td>
          <td>
              <input required type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td></td>
          <td></td>
          <td>totais <input required type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
          <td><input required type="text" name="numbers" pattern="[0-9]+$" required="required" class="input-relatorio"/> </td>
      </tr>
     <!-----------------*************** TABELA INFORMAÇÕES FINAIS ***************----------------->
     <table width="95%" border="0" align="center">
     <tr>
    <td colspan="8"> <h1 class="h1-form-titulo tr-titulo-h1"> VI - INFORMAÇÕES FINAIS</h1> </td> 
    </tr>   
    </table>
    
    <table width="95%" border="0" align="center">
   
    <tr class="tr-texto-i">
    <td>secretário do conselho</td>
    <td colspan="7"><input type="text" required="required" name="nome" class="input-relatorio-txt" pattern="[a-z\s]+$" />      <label for="tipoPresbitero"></label></td>
    </tr>
  <tr class="tr-texto-i">
    <td width="164">Endereço</td>
    <td colspan="2"><input type="text" required="required" name="endereco" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
    <td width="170">&nbsp;</td>
    <td width="92">número</td>
    <td width="346"><input type="text" required="required" name="enderecoNumero" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td width="81">complemento</td>
    <td width="599"><input type="text" required="required" name="enderecoComplemento" class="input-relatorio-txt" pattern="[a-z\s]+$" /></td>
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
       <td>telefone igreja</td>
    <td colspan="1"><input type="text" required="required" name="cxpostal" class=input-relatorio-i pattern="[0-9]+$" /></td>
    <td>e-mail</td>
    <td colspan="2"><input type="email" required="required" name="email" class="input-relatorio-txt" /></td>
  </tr>
    
  </table>
    
   
           <table width="95%" border="0" align="center">
     <tr>
      <td colspan=8" align="center"><input type="submit" name="btn-enviar" class="btn-form-cadastro" id="btn-enviar" value="Cadastrar" /></td>
    </tr>
                                                                                                                                      </tr>
    </table>                                                                                                                           
</table>
    
    
</form>
</div>
</body>
</html>