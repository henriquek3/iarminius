<?php
//require_once "../models/Crud.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>iStatic - webMinster</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bot/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="tudo container">
     <?php //include("menu.php") ?>
    <div class="col-xs-offset-4 col-xs-12"><h2>Cadastrar Igreja</h2></div>
    <form class="form-horizontal" method="post" action="../controllers/igreja.php">
        
        <!-- SELECIONAR SINODO E PRESBITÉRIO -->
        
        <div class="form-group">
           <label for="idSinodo" class="col-xs-1">Sínodo</label>
           <div class="col-xs-5">
           <select name="idSinodo" id="idSinodo" class="form-control">
               <!-- CÓDIGO SINODO -->
           </select>
            </div>
          
           <label for="idPresbiterio" class="col-xs-1">Presbitério</label>
           <div class="col-xs-5">
           <select name="idPresbiterio" id="idPresbiterio" class="form-control">
               <!-- CÓDIGO SINODO -->
           </select>
        </div>
        </div>
        
        <!---------------------------------------------------->
        
        <!-- NOME E E-MAIL -->
        
         <div class="form-group">
            <label for="nome" class="col-xs-1">Nome</label>
            <div class="col-xs-5">
            <input type="text" required name="nome" id="nome" class="form-control">
            </div>
            <label for="email" class="col-xs-1">E-mail</label>
            <div class="col-xs-5">
            <input type="email" required name="email" id="email" class="form-control">
            </div>
            
        </div> 
        
        <!---------------------------------------------------->
            
        <!-- ENDEREÇO, NÚMERO E COMPLEMENTO -->
        
         <div class="form-group">
            <label for="endereco" class="col-xs-1">Endereço</label>
            <div class="col-xs-5">
            <input type="text" required name="endereco" class="form-control">
            </div>
            <label for="enderecoNumero" class="col-xs-1">Número</label>
            <div class="col-xs-1">
            <input type="number" name="enderecoNumero" id="enderecoNumero" class="form-control"> 
            </div>
            <label class="col-xs-2" for="enderecoComplemento">Complemento</label>
            <div class="col-xs-2">
            <input type="text" required name="enderecoComplemento" id="enderecoComplemento" class="form-control"> 
            </div>
            
            
        </div> 
        
        <!---------------------------------------------------->
        
        <!-- BAIRRO, CIDADE e ESTADO -->
        
         <div class="form-group">
            <label for="enderecoBairro" class="col-xs-1">Bairro</label>
            <div class="col-xs-2">
            <input type="text" required name="enderecoBairro" id="enderecoBairro" class="form-control"> 
            </div>
            <label for="estados" class="col-xs-1">Estado</label>
            <div class="col-xs-3">
            <select class="form-control" id="estados" name="estados" required>
            </select>
            </div>
            <label for="idCidade" class="col-xs-1">Cidade</label>
            <div class="col-xs-4">
            <select class="form-control" id="idCidade" name="idCidade"></select> 
            </div>
        </div> 
        
        <!---------------------------------------------------->
        
        <!-- CEP, TELEFONE, FAX E CX POSTAL -->
        
         <div class="form-group">
           <label for="cep" class="col-xs-1">CEP</label>
           <div class="col-xs-2">
           <input type="number_format" required name="cep" id="cep" class="form-control">
           </div>
            <label for="telefone" class="col-xs-1">Telefone</label>
            <div class="col-xs-2">
            <input type="number_format" required name="telefone" id="telefone" class="form-control"> 
            </div>
            <label for="fax" class="col-xs-1">Fax</label>
            <div class="col-xs-2">
            <input type="number_format" required name="fax" id="fax" class="form-control"> 
            </div>
            <label for="cxPostal" class="col-xs-2">Cx. Postal</label>
            <div class="col-xs-1">
            <input type="number_format" required name="cxPostal" id="cxPostal" class="form-control"> 
            </div>
        </div> 
        
        <!---------------------------------------------------->
        
        <!-- CEP, TELEFONE, FAX E CX POSTAL -->
        
         <div class="form-group">
           <label for="homepage" class="col-xs-1">WebSite</label>
           <div class="col-xs-2">
           <input type="text" required name="homepage" id="homepage" class="form-control">
           </div>
            <label for="dataOrganizacao" class="col-xs-2">Data Organização</label>
            <div class="col-xs-2">
            <input type="date" required name="dataOrganizacao" id="dataOrganizacao" class="form-control"> 
            </div>
            <label for="cnpj" class="col-xs-1">CNPJ</label>
            <div class="col-xs-2">
            <input type="number_format" required name="cnpj" id="cnpj" class="form-control"> 
            </div>
            <label for="nroOrdem" class="col-xs-1">N&deg; Ordem</label>
            <div class="col-xs-1">
            <input type="number_format" required name="nroOrdem" id="nroOrdem" class="form-control"> 
            </div>
        </div> 
        
        <!---------------------------------------------------->
        
        <div class="form-group">
            <div class="col-xs-offset-5 col-xs-10">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
            
        
      
        
    </form>
    
</div>

  
</body>
</html>

 
            