<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karla:300,400,700|Anton:300,400|Ubuntu+Condensed:300,400|Pacifico:300,400|Fredoka+One:300,400">
        <link rel="stylesheet" href="css/menu.css">
        <title></title>
    </head>
    <body>
      <header>
          
        <input type="checkbox" id ="icon-menu">
        <label for = "icon-menu" id="icnlabel"> <img src="resources/menu-icon2.png" width="40px" height="40px" alt="" > </label>

        <nav class = "navbarShidori">
            <ul id="navUL">
                <li><a class = "navbarShidoriItem5" href="index.php">Inicio</a></li>
                
                <li><a class = "navbarShidoriItem2" href="listas.php">Listas</a>
                 <!--   <ul>
                        <div class="containerCategorias">
                        <li><a id="linkC" href="#">Prueba</a> </li>
                        <li><a id="linkC" href="#">Pruebaaa</a> </li>
                        <li><a id="linkC" href="#">Pruebaaaa</a> </li>
                        <li><a id="linkC" href="#">Pruebaaaaa</a> </li>
                        </div>
                    </ul>-->
                </li>
                <li><a class = "navbarShidoriItem3" href="agregarObjeto.php">Agregar</a></li>
                <li><a class = "navbarShidoriItem4" href="#">Buscar</a>
                    <ul>

                        <li>
                            <div class="containerBuscar">
                                 <input type="text" id="inputBuscar" name="inputBuscar">
                                 <input type="image" id="inputBuscarButton" src="resources/buscar-icon.png">
                            </div>
                        </li>
                    </ul>

                </li>
                 <li><a class = "navbarShidoriItem1" href="#" >Iniciar Sesión</a>
                    <ul>
                        <li>
                           <div class="loginform">
                               <form>
                                    <input type="email" id="user" name="Email" placeholder="ejemplo@ejemplo.com">
                                    <input type="password" id="pass" name="Password" placeholder="contraseña">
                                    <button type="submit" id="btnInicioSesion" class="btn btn-primary btn-block">Iniciar Sesión</button>
                                    <div class="textoR">
                                    <label for="linkR" id="lebelR">¿No tienes una cuenta?</label>
                                    <a href="registro.php" id="linkR">Registrate</a>                                  
                                    </div>
                               </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    </body>
</html>
