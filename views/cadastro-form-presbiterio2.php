<?php
require_once "../models/Crud.php";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>iArminius</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
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
    <section class="container">
    <div class="col-xs-6"></div>
    <div class="col-xs-6 tb-cadastrados">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Sinodos Cadastrados</th>
            </tr>
            </thead>
            <tbody>
           <?php
            foreach ( Crud::select(Select::presbiterios()) as $gridGrupo ){
                echo '<tr>';
                echo '<th scope="row">'.$gridGrupo['id'].'</th>';
                echo '<td>'.$gridGrupo['nome'].'</td>';
                echo '<td>'.' '.'</td>';
              
            }
            ?>

            </tbody>
        </table>
    </div>

</section>
 <!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
