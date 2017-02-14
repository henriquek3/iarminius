<?php
require_once "../models/Crud.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>iStatic - webMinster</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="vendor/bootstrap/4.0.0-alpha.5-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include("menu.php") ?>
<div class="tudo container">
    <div class="col-xs-offset-4 col-xs-12"><h2 class="h2-titulo">Cadastrar Presbitério</h2></div>
    <form class="form-horizontal" method="post" action="../controllers/presbiterio.php">
        <div class="form-group">

            <label for="sinodo" class="col-xs-1">Sínodo</label>
            <div class="col-xs-3">
                <select name="sinodo" id="sinodo" class="col-xs-3 form-control">
                    <option selected>- selecione -</option>
                    <?php
                    foreach (Crud::select(Select::sinodos()) as $key) {
                        echo "<option value=\"{$key['id']}\">{$key['nome']}</option>";
                    }
                    ?>
                    <!--<option value="0">Selecione o Sínodo</option> -->
                </select>
            </div>
            <label for="nome" class="col-xs-1">Nome</label>
            <div class="col-xs-5">
                <input type="text" name="nome" id="nome" class="col-xs-5 form-control">
            </div>
            <label for="sigla" class="col-xs-1">Sigla</label>
            <div class="col-xs-1">
                <input type="text" name="sigla" id="sigla" class="col-xs-1 form-control" maxlength="4">
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