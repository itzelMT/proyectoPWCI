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
        <link rel="stylesheet" href="css/listas.css">
        <title></title>
    </head>
    <body>
        <header class="header">
            <?php include("menu.php"); ?>
        </header>
        <div class="container" id="botones">
            <input type="button" value="Públicas" id="lol" onclick="ocultar();">
            <input type="button" value="Privadas" id="lol" onclick="regresar();">
        </div>
        <!-- Contenedor para listas publicas -->
        <div class="container" id="contenedorPublico">
            <div class="container row">

                <div class="lista col-xl col-md-4 col-sm-6 col-xs-12">
                    <div class="card ">
                        <img src="resources/productos/choker.jpg" class="imagen" >
                        <h4 class="titulo"> Accesorios </h4>
                    </div>
                    <div>
                        <a href="objetos.php"><input type="image" src="resources/seguir.png" id="imgSeguir"></a>
                        <a href="#containerLista"><input type="image" src="resources/editar.png" id="imgEditar"></a>
                        <input type="image" src="resources/eliminar.png" id="imgEliminar">
                    </div>
                </div>
                <div class="lista col-xl col-md-4 col-sm-6 col-xs-12">
                    <div class="card ">
                        <img src="resources/productos/baphomet.jpg" class="imagen">
                        <h4 class="titulo"> Peluches </h4>
                    </div>
                    <div>
                        <a href="objetos.php"><input type="image" src="resources/seguir.png" id="imgSeguir"></a>
                        <a href="#containerLista"><input type="image" src="resources/editar.png" id="imgEditar"></a>
                        <input type="image" src="resources/eliminar.png" id="imgEliminar">
                    </div>
                </div>
                <div class="lista col-xl col-md-4 col-sm-6 col-xs-12">
                    <div class="card ">
                        <img src="resources/productos/baphomet-shirt.jpg" class="imagen">
                        <h4 class="titulo"> Ropa </h4>
                    </div>
                    <div>
                        <a href="objetos.php"><input type="image" src="resources/seguir.png" id="imgSeguir"></a>
                        <a href="#containerLista"><input type="image" src="resources/editar.png" id="imgEditar"></a>
                        <input type="image" src="resources/eliminar.png" id="imgEliminar">
                    </div>
                </div>
                <div class="lista col-xl col-md-4 col-sm-6 col-xs-12">
                    <div class="card ">
                        <img src="resources/productos/sacapuntas.png" class="imagen">
                        <h3 class="titulo"> Papelería </h3>
                    </div>
                    <div>
                        <a href="objetos.php"><input type="image" src="resources/seguir.png" id="imgSeguir"></a>
                        <a href="#containerLista"><input type="image" src="resources/editar.png" id="imgEditar"></a>
                        <input type="image" src="resources/eliminar.png" id="imgEliminar">
                    </div>
                </div>
            </div>

            <div class="container row">

                <div class="lista col-xl col-md-4 col-sm-6 col-xs-12">
                    <div class="card ">
                        <img src="resources/productos/choker.jpg" class="imagen">
                        <h4 class="titulo"> Accesorios </h4>
                    </div>
                    <div>
                        <a href="objetos.php"><input type="image" src="resources/seguir.png" id="imgSeguir"></a>
                        <a href="#containerLista"><input type="image" src="resources/editar.png" id="imgEditar"></a>
                        <input type="image" src="resources/eliminar.png" id="imgEliminar">
                    </div>
                </div>
                <div class="lista col-xl col-md-4 col-sm-6 col-xs-12">
                    <div class="card ">
                        <img src="resources/productos/baphomet.jpg" class="imagen">
                        <h4 class="titulo"> Peluches </h4>
                    </div>
                    <div>
                        <a href="objetos.php"><input type="image" src="resources/seguir.png" id="imgSeguir"></a>
                        <a href="#containerLista"><input type="image" src="resources/editar.png" id="imgEditar"></a>
                        <input type="image" src="resources/eliminar.png" id="imgEliminar">
                    </div>
                </div>
                <div class="lista col-xl col-md-4 col-sm-6 col-xs-12">
                    <div class="card ">
                        <img src="resources/productos/baphomet-shirt.jpg" class="imagen">
                        <h4 class="titulo"> Ropa </h4>
                    </div>
                    <div>
                        <a href="objetos.php"><input type="image" src="resources/seguir.png" id="imgSeguir"></a>
                        <a href="#containerLista"><input type="image" src="resources/editar.png" id="imgEditar"></a>
                        <input type="image" src="resources/eliminar.png" id="imgEliminar">
                    </div>
                </div>
                <div class="lista col-xl col-md-4 col-sm-6 col-xs-12">
                    <div class="card ">
                        <img src="resources/productos/sacapuntas.png" class="imagen">
                        <h3 class="titulo"> Papelería </h3>
                    </div>
                    <div>
                        <a href="objetos.php"><input type="image" src="resources/seguir.png" id="imgSeguir"></a>
                        <a href="#containerLista"><input type="image" src="resources/editar.png" id="imgEditar"></a>
                        <input type="image" src="resources/eliminar.png" id="imgEliminar">
                    </div>
                </div>
            </div>
        </div
        
        <!-- Contenedor para listas privadas -->
        <div class="container" id="contenedorPrivado">
            <div class="container row">

                <div class="lista col-xl col-md-4 col-sm-6 col-xs-12">
                    <div class="card ">
                        <img src="resources/productos/sacapuntas.png" class="imagen">
                        <h4 class="titulo"> Papelería </h4>
                    </div>
                    <div>
                        <a href="objetos.php"><input type="image" src="resources/seguir.png" id="imgSeguir"></a>
                        <a href="#containerLista"><input type="image" src="resources/editar.png" id="imgEditar"></a>
                        <input type="image" src="resources/eliminar.png" id="imgEliminar">
                    </div>
                </div>
                <div class="lista col-xl col-md-4 col-sm-6 col-xs-12">
                    <div class="card ">
                        <img src="resources/productos/baphomet-shirt.jpg" class="imagen">
                        <h4 class="titulo"> Ropa </h4>
                    </div>
                    <div>
                        <a href="objetos.php"><input type="image" src="resources/seguir.png" id="imgSeguir"></a>
                        <a href="#containerLista"><input type="image" src="resources/editar.png" id="imgEditar"></a>
                        <input type="image" src="resources/eliminar.png" id="imgEliminar">
                    </div>
                </div>
                <div class="lista col-xl col-md-4 col-sm-6 col-xs-12">
                    <div class="card ">
                        <img src="resources/productos/baphomet.jpg" class="imagen">
                        <h4 class="titulo"> Peluches </h4>
                    </div>
                    <div>
                        <a href="objetos.php"><input type="image" src="resources/seguir.png" id="imgSeguir"></a>
                        <a href="#containerLista"><input type="image" src="resources/editar.png" id="imgEditar"></a>
                        <input type="image" src="resources/eliminar.png" id="imgEliminar">
                    </div>
                </div>
                <div class="lista col-xl col-md-4 col-sm-6 col-xs-12">
                    <div class="card ">
                        <img src="resources/productos/choker.jpg" class="imagen">
                        <h3 class="titulo"> Accesorios </h3>
                    </div>
                    <div>
                        <a href="objetos.php"><input type="image" src="resources/seguir.png" id="imgSeguir"></a>
                        <a href="#containerLista"><input type="image" src="resources/editar.png" id="imgEditar"></a>
                        <input type="image" src="resources/eliminar.png" id="imgEliminar">
                    </div>
                </div>
            </div>
        </div>
        <div class="modalDialog" id="containerLista">
            <div class="form-box">
                <div class="needs-validation" novalidate method="POST" action='addList' enctype="multipart/formdata">
                    <a href="#close" title="Close" class="close">X</a>
                    <div class="form-group">
                        <label for="nameObjeto" id="labelNomL">Nombre:</label>
                        <input type="text" class="form-control" id="nameObjeto" value="Nombre" name="nameObjeto"
                               required onfocus="
                                       if (this.value === 'Nombre')
                                           this.value = '';" onblur="
                                                   if (this.value === '')
                                                       this.value = 'Nombre';">
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Campo obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="descObjeto" id="labelDescL">Descripción:</label>
                        <input type="text" class="form-control" id="descObjeto" value="Descripción" name="descObjeto"
                               required onfocus="
                                       if (this.value === 'Descripción')
                                           this.value = '';" onblur="
                                                   if (this.value === '')
                                                       this.value = 'Descripción';"/>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Campo obligatorio.</div>
                    </div>

                    <div class="form-groupRadio">
                        <p> Estatus: </p>
                        <label class="radio-inline"><input type="radio" name="optradio2" checked>Pública</label>
                        <label class="radio-inline"><input type="radio" name="optradio2">Privada</label>
                    </div>
                    <button type="submit" id="btnInicioSesion" class="btn btn-primary btn-block">Guardar</button>
                </div>
            </div>
        </div>


        <?php include("footer.php"); ?>
        <script src="js/listas.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
