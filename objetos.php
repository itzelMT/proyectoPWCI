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
        <link rel="stylesheet" href="css/objetos.css">
        <title></title>
    </head>
    <body>
        <header class="header">
            <?php include("menu.php"); ?>
        </header>
        
        <!--
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="resources/productos/baphomet-shirt.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nombre</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu eros commodo, rhoncus purus id, pulvinar magna.</p>
                    
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="resources/productos/choker.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nombre</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                   
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="resources/productos/baphomet.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nombre</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                   
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="resources/productos/sacapuntas.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nombre</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu eros commodo, rhoncus purus id, pulvinar magna.</p>
                    
                </div>
            </div>
        </div>-->
        <div class="container" id="contenedorGd">
             <h5 id="tituloR">
                <?php
                echo "Nombre de la lista (6 objetos)"
                ?>
            </h5>
        <div class="card-deck">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="resources/productos/baphomet-shirt.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nombre</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="resources/productos/choker.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nombre</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
           <div class="card-deck">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="resources/productos/sacapuntas.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nombre</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
           <div class="card-deck">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="resources/productos/baphomet.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nombre</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        
           <div class="card-deck">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="resources/productos/choker.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nombre</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
           <div class="card-deck">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="resources/productos/baphomet-shirt.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Nombre</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        </div>
        <?php include("footer.php"); ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
