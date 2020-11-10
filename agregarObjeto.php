<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/agregarObjeto.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Muli:300,400|Barlow+Condensed:300,400|Playball:300,400">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <title></title>

    </head>
    <body>
        <?php include("menu.php"); ?>
        <video class="video"  autoplay loop muted>
            <source  src ="resources/br3.mp4" type = "video/mp4"/>
        </video>
        <div class="container" id="botones">
            <input type="button" value="Lista" id="lol" onclick="regresar();">
            <input type="button" value="Objeto" id="lol" onclick="ocultar();">
        </div>
        <div class="container" id="containerObjeto">
            <div class="form-box">

                <div class="needs-validation row" novalidate method="POST" action='addObject' enctype="multipart/formdata">
                    <div class="form-groupImage col-xl-4 col-md-12 col-sm-12 col-xs-12">
                        <input type="file" id="browse" name="fileupload"  accept="image/*" onChange="Handlechange();"/>
                        <input type="image"onmouseout="this.src = 'resources/imagen.png';" onmouseover="this.src = 'resources/imagenHolder.png';"  
                               src="resources/imagen.png" id="topImage"  onclick="HandleBrowseClick(); this.disabled = true" />
                    </div>
                    <div class="form col-xl-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="nameObjeto" id="labelNom">Nombre:</label>
                            <input type="text" class="form-control" id="nameObjeto" value="Nombre" name="nameObjeto"
                                   required onfocus="mostrarLabel('labelNom');
                                           if (this.value === 'Nombre')
                                               this.value = '';" onblur="ocultarLabel('labelNom');
                                                       if (this.value === '')
                                                           this.value = 'Nombre';">
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Campo obligatorio.</div>
                        </div>
                        <div class="form-group">
                            <label for="descObjeto" id="labelDesc">Descripción:</label>
                            <input type="text" class="form-control" id="descObjeto" value="Descripción" name="descObjeto"
                                   required onfocus="mostrarLabel('labelDesc');
                                           if (this.value === 'Descripción')
                                               this.value = '';" onblur="ocultarLabel('labelDesc');
                                                       if (this.value === '')
                                                           this.value = 'Descripción';">
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Campo obligatorio.</div>
                        </div>
                        <div class="form-groupDrop" id="dropLista">
                            <label for="items">Agregar a la lista:</label>
                            <select id="items">
                                <option value="item-1">Item 1</option>
                                <option value="item-2">Item 2</option>
                                <option value="item-3">Item 3</option>
                                <option value="item-4">Item 4</option>
                            </select>
                        </div>
                        <div class="form-groupRadio">
                            <p> Estatus: </p>
                            <label class="radio-inline"><input type="radio" name="optradio" checked>Se busca</label>
                            <label class="radio-inline"><input type="radio" name="optradio">Se tiene</label>
                        </div>
                        <button type="submit" id="btnInicioSesion" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" id="containerLista">
            <div class="form-box">
                <div class="needs-validation" novalidate method="POST" action='addList' enctype="multipart/formdata">
                    <div class="form-group">
                        <label for="nameObjeto" id="labelNomL">Nombre:</label>
                        <input type="text" class="form-control" id="nameObjeto" value="Nombre" name="nameObjeto"
                               required onfocus="mostrarLabel('labelNomL');
                                       if (this.value === 'Nombre')
                                           this.value = '';" onblur="ocultarLabel('labelNomL');
                                                   if (this.value === '')
                                                       this.value = 'Nombre';">
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Campo obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="descObjeto" id="labelDescL">Descripción:</label>
                        <input type="text" class="form-control" id="descObjeto" value="Descripción" name="descObjeto"
                               required onfocus=" mostrarLabel('labelDescL');
                                       if (this.value === 'Descripción')
                                           this.value = '';" onblur="ocultarLabel('labelDescL');
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
        <script src="js/agregarObjeto.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
