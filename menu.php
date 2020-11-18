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
                    <li><a class = "navbarShidoriItem4" href="#containerBuscar">Buscar</a>
                        <ul>

                            <li>
                                <form class="containerBuscar" action="resultados.php">
                                    <input type="text" id="inputBuscar" name="inputBuscar">
                                    <input type="image" href="resultados.php" id="inputBuscarButton" src="resources/buscar-icon.png" >
                                </form>
                            </li>
                        </ul>

                    </li>
                    <li><a class = "navbarShidoriItem1" href="#loginform" >  Iniciar Sesión </a>
                        <ul>
                            <li>
                                <!-- form cuando no ha iniciado sesion-->
                                <div class="loginform" id="loginform">
                                 <form action="php/conexion.php" method="POST">
                                     <a href="#close" title="cerrar" class="cerrar">X</a>
                                     <input type="email" id="user" name="Email" placeholder="ejemplo@ejemplo.com">
                                     <input type="password" id="pass" name="Password" placeholder="contraseña">
                                     <div class="textoC">
                                         <input type="checkbox" name="checkRecuerdame" id="CheckR">
                                         <label  for="checkRecuerdame" id="lebelC"> Recuérdame </label>
                                     </div>
                                     <button type="submit" id="btnInicioSesion" class="btn btn-primary btn-block">Iniciar Sesión</button>
                                  <div class="textoR">
                                         <label for="linkR" id="lebelR">¿No tienes una cuenta?</label>
                                         <a href="registro.php" id="linkR">Registrate</a>                                  
                                     </div>
                                 </form>
                             </div>
                                 <!-- Cuando ya inicio sesion
                                <div class="loginform" id="loginform2" >
                                    
                                    <ul id="listaU">
                                        <div id="containerCuenta">
                                        <a href="#close" title="cerrar" class="cerrar">X</a>
                                        <li><a href="modificarUsuario.php">Mi cuenta</a></li>
                                        <li><a href="listas.php">Mis listas</a></li>
                                        <li> <a href="agregarObjeto.php">Agregar</a></li>
                                        <li> <a href="#">Cerrar Sesión</a></li>
                                        </div>
                                    </ul>
                                </div>-->
                                 
                            </li>
                        </ul>
                    </li
                    <li> 
                        <ul>
                            <li id="flecha-menu">
                                <label for = "icon-menu" id="icnlabel2"> 
                                    <img src="resources/flecha.png" width="30px" height="30px" alt="" > 
                                </label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
    </body>
</html>
