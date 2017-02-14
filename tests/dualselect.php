<?php require_once "../models/Crud.php";
/**
 * Created by PhpStorm.
 * User: Jean Freitas
 * Date: 13/02/2017
 * Time: 22:52
 */ ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://iarminius.ipcacoal.org/views/vendor/bootstrap/4.0.0-alpha.5-dist/css/bootstrap.css"
          rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        .carregando {
            color: #ff0000;
            display: none;
        }

        .carregandoPresbiterios {
            color: #ff0000;
            display: none;
        }

        .loadChurch {
            color: #ff0000;
            display: none;
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="container" style="padding-top: 50px">
    <div class="form-group row">
        <label for="idSinodo" class="col-form-label col-xs-1">Sínodo</label>
        <div class="col-xs-3">
            <select name="idSinodo" id="idSinodo" class="input-txt form-control">

                <option selected>- selecione -</option>
                <?php
                foreach (Crud::select(Select::sinodos()) as $key) {
                    echo "<option value=\"{$key['id']}\">{$key['nome']}</option>";
                }
                ?>
                <!-- CÓDIGO SINODO -->
            </select>
        </div>

        <label for="idPresbiterio" class="col-form-label col-xs-1">Presbitério</label>
        <div class="col-xs-3">
            <span class="carregandoPresbiterios">Aguarde, carregando...</span>
            <select name="idPresbiterio" id="idPresbiterio" class="input-txt form-control">
                <option selected>- selecione -</option>
                <!-- CÓDIGO SINODO -->
            </select>
        </div>

        <label for="igreja" class="col-form-label col-xs-1">Igrejas</label>
        <div class="col-xs-3">
            <span class="loadChurch">Aguarde, carregando...</span>
            <select name="igreja" id="igreja" class="input-txt form-control">
                <option selected>- selecione -</option>
                <!-- CÓDIGO SINODO -->
            </select>
        </div>
    </div>
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


<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("jquery", "1.4.2");
</script>
<script type="text/javascript">
    $(function () {
        $('#estados').change(function () {
            if ($(this).val()) {
                $('#idCidade').hide();
                $('.carregando').show();
                $.getJSON('../controllers/request_cidades.php?search=', {
                    id_estado: $(this).val(),
                    ajax: 'true'
                }, function (j) {
                    var options = '<option value="">- Escolha -</option>';
                    for (var i = 0; i < j.length; i++) {
                        options += '<option value="' + j[i].id + '">' + j[i].nome + '</option>';
                    }
                    $('#idCidade').html(options).show();
                    $('.carregando').hide();
                });
            } else {
                $('#idCidade').html('<option value="">– Escolha –</option>');
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#idSinodo').change(function () {
            if ($(this).val()) {
                $('#idPresbiterio').hide();
                $('.carregandoPresbiterios').show();
                $.getJSON('../controllers/request_presbiterios.php?search=', {
                    id_sinodo: $(this).val(),
                    ajax: 'true'
                }, function (j) {
                    var options = '<option value="">- Escolha -</option>';
                    for (var i = 0; i < j.length; i++) {
                        options += '<option value="' + j[i].id + '">' + j[i].nome + '</option>';
                    }
                    $('#idPresbiterio').html(options).show();
                    $('.carregandoPresbiterios').hide();
                });
            } else {
                $('#idPresbiterio').html('<option value="">– Escolha –</option>');
            }
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#idPresbiterio').change(function () {
            if ($(this).val()) {
                $('#igreja').hide();
                $('.loadChurch').show();
                $.getJSON('../controllers/request_igrejas.php?search=', {
                    id_presbiterio: $(this).val(),
                    ajax: 'true'
                }, function (j) {
                    var options = '<option value="">- Escolha -</option>';
                    for (var i = 0; i < j.length; i++) {
                        options += '<option value="' + j[i].id + '">' + j[i].nome + '</option>';
                    }
                    $('#igreja').html(options).show();
                    $('.loadChurch').hide();
                });
            } else {
                $('#igreja').html('<option value="">– Escolha –</option>');
            }
        });
    });
</script>
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


</body>
</html>
