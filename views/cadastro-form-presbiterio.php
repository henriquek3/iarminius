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
<form id="form1" name="form1" method="post" action="../controllers/presbiterio.php">
  <table width="600" border="0" align="center">
    <tr>
      <td colspan="6"><h2 class="h2-form-cadastro">Cadastrar presbitério</h2></td>
    </tr>
    <tr>
      <td><p class="p-form-cadsastro">sínodo</p></td>
      <td><label for="sinodo"></label>
        <select name="sinodo" id="sinodo" class="select-sinodo">
          <option value="0">Selecione o Sínodo</option>
      </select></td>
      <td><p class="p-form-cadsastro">Nome</p></td>
      <td><label for="nome"></label>
      <input type="text" name="nome" id="nome" class="input-form-cadastro"/></td>
      <td><p class="p-form-cadsastro">sigla</p></td>
      <td><label for="sigla"></label>
      <input type="text" name="sigla" id="sigla" class="input-form-cadastro-sigla" maxlength="4"/></td>

    </tr>
   <tr>
   <tr>
      <td colspan="6" align="center"><input type="submit" name="btn-enviar" class="btn-form-cadastro" id="btn-enviar" value="Cadastrar" /></td>
    </tr>
  </table>
</form>
</div>

</body>
</html>