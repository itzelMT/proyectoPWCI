<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Muli:300,400|Barlow+Condensed:300,400|Playball:300,400">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/index.css">
        <title>KAWAII POSTING | INICIO</title>
    </head>
    <body>

        <header class="header">
            <?php include("menu.php"); ?>
        </header>
        <div>
            <video  autoplay loop muted id="videoIndex">
                <source  src ="resources/intro-KawaiiPosting.mp4" type = "video/mp4"/>
            </video>
        </div>
        <div class="container row">

            <div class="card col-xl col-md-4 col-sm-6 col-xs-12">
                <img src="resources/productos/choker.jpg" class="imagen">
                <h4 class="titulo"> Accesorios </h4>
            </div>
            <div class="card col-xl col-md-4 col-sm-6 col-xs-12">
                <img src="resources/productos/baphomet.jpg" class="imagen">
                <h4 class="titulo"> Peluches </h4>
            </div>
            <div class="card col-xl col-md-4 col-sm-6 col-xs-12">
                <img src="resources/productos/baphomet-shirt.jpg" class="imagen">
                <h4 class="titulo"> Ropa </h4>
            </div>
            <div class="card col-xl col-md-4 col-sm-6 col-xs-12">
                <img src="resources/productos/sacapuntas.png" class="imagen">
                <h3 class="titulo"> Papelería </h3>
            </div>
        </div>
        <?php include("footer.php"); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>

</html>
