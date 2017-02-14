<!DOCTYPE html>
<html lang="en">
<head>
    <title>iStatic - webMinster</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://iarminius.ipcacoal.org/views/vendor/bootstrap/4.0.0-alpha.5-dist/css/bootstrap.css"
          rel="stylesheet">
    <link rel="stylesheet" href="views/style.css">
</head>
<body>


<?php include("views/menu.php") ?>
<div class="tudo container">

    <div class="row">

        <div class="img-inicial col-xs-12"><img src=views/img/Logo.jpg></div>

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