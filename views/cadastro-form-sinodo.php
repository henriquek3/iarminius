<!DOCTYPE html>
<html lang="en">
<head>
  <title>iStatic - webMinster</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="tudo container">
     <?php include("menu.php") ?>
    <h2>Cadastrar Sínodo</h2>
    <form class="form-horizontal" method="post" action="../controllers/sinodo.php">
        <div class="form-group">
            <label for="nome" class="control-label col-xs-1">Nome:</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <label for="sigla" class="control-label col-xs-1">Sigla:</label>
            <div class="col-xs-1">
            <input type="text" class="form-control" name="sigla" id="sigla" maxlength="3">
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-5 col-xs-10">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>
    
</div>

</body>
</html>
