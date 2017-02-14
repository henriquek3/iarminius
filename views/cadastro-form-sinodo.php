<!DOCTYPE html>
<html lang="en">
<head>
  <title>iStatic - webMinster</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://iarminius.ipcacoal.org/views/vendor/bootstrap/4.0.0-alpha.5-dist/css/bootstrap.css"
          rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

     <?php include("menu.php") ?>
     <div class="tudo container">
         <div class="col-xs-offset-4 col-xs-12"><h2 class="h2-titulo">Cadastrar Sínodo</h2></div>
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
            <div class="btn-teste col-xs-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>
    
</div>


     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
             integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
             crossorigin="anonymous"></script>

     <!-- Tether -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
             integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
             crossorigin="anonymous"></script>

     <!-- Bootstrap 4 Alpha JS -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"
             integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU"
             crossorigin="anonymous"></script>
</body>
</html>

<!-- Initialize Bootstrap functionality -->
<script>
    // Initialize tooltip component
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    // Initialize popover component
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>