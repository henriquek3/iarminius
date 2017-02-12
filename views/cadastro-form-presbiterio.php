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
<div id="table-form" class="table-form">
    <?php include("menu.php") ?>
<form id="form1" name="form1" method="post" action="../controllers/presbiterio.php">
  
     <table width="95%" border="0" align="center">
     <tr>
    <td colspan="8"> <h1 class="h1-form-titulo tr-titulo-h1"> cadastrar presbitério</h1> </td> 
    </tr>   
    </table>
    
    <table width="600" border="0" align="center">
    
    <tr class="tr-texto">
      <td><p class="p-form-cadsastro">sínodo</p></td>
      <td><label for="sinodo"></label>
        <select name="sinodo" id="sinodo" class="select-sinodo">
            <?php
                foreach (Crud::select(Select::sinodos()) as $key){
                    echo "<option value=\"{$key['id']}\">{$key['nome']}</option>";
                }
            ?>
          <!--<option value="0">Selecione o Sínodo</option> -->
      </select></td>
      <td><p class="p-form-cadsastro">Nome</p></td>
      <td><label for="nome"></label>
      <input required type="text" name="nome" id="nome" class="input-form-cadastro"/></td>
      <td><p class="p-form-cadsastro">sigla</p></td>
      <td><label for="sigla"></label>
      <input required type="text" name="sigla" id="sigla" class="input-form-cadastro-sigla" maxlength="4"/></td>

    </tr>
   <tr>
   <tr>
      <td colspan="6" align="center"><input required type="submit" name="btn-enviar" class="btn-form-cadastro" id="btn-enviar" value="Cadastrar" /></td>
    </tr>
  </table>
</form>
</div>

</body>
</html>