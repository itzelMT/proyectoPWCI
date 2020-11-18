<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/modificarUsuario.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Muli:300,400|Barlow+Condensed:300,400|Playball:300,400">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <title>KAWAII POSTING | Modificar</title>
    </head>
    <body>
        <?php include("menu.php"); ?>


        <div class="container">
            <div class="form-box">

                <form class="needs-validation" novalidate method="POST" action='Register' enctype="multipart/formdata">
                    <div class="form-groupImage">  
                        <input type="file" id="browse" name="fileupload"  accept="image/*" onChange="Handlechange();"/>
                        <input type="image"onmouseout="this.src = 'resources/user.png';" onmouseover="this.src = 'resources/user-icon.png';"  
                               src="resources/user.png" id="topImage"  onclick="HandleBrowseClick(); this.disabled = true" />

                    </div>
                    <div class="form-group">
                        <label for="uname">Nombre de usuario:</label>
                        <input type="text" class="form-control" id="uname" placeholder="Ingrese el nombre de usuario" name="uname"
                               required pattern="[A-Za-z0-9]{3,40}"  title="Letras y números. Tamaño mínimo: 3. Tamaño máximo: 40">
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Campo obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="coel">Correo Electrónico:</label>
                        <input type="email" class="form-control" id="coel" placeholder="correo@ejemplo.com" name="correo"
                               required>
                        <div class="valid-feedback">Valido.</div>
                        <div class="invalid-feedback">Campo obligatorio.</div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Contraseña:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Ingrese la contraseña" name="pswd"  
                               pattern="(?=.*\d)(?=.*[a-záéíóúüñ]).*[A-ZÁÉÍÓÚÜÑ].*" required title="Debe tener al menos una mayúscula, una minúscula y un dígito">
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Campo obligatorio</div>
                    </div>
                    <div class="form-groupRadio">
                        <p> Usuario: </p>
                        <label class="radio-inline"><input type="radio" name="optradio" checked>Público</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Privado</label>
                    </div>


                    <button type="submit" id="btnInicioSesion" class="btn btn-primary btn-block">Modificar</button>

                </form>

                <div class="textoR">
                    <label for="linkR" id="lebelR">¿Deseas darte de baja?</label>
                    <a href="#" id="linkR">Eliminar cuenta</a>                                  
                </div>
            </div>  
        </div>
        <?php include("footer.php"); ?>
        <script src="js/registro.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
