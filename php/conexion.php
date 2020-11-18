<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$user = "root";
$pass = "";
$host = "localhost:3306";

$connection = mysqli_connect($host, $user, $pass);

if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "Hemos conectado al servidor <br>" ;
        }
        
 $datab = "KawaiiPosting";
 
 $db = mysqli_select_db($connection,$datab);
 
 if (!$db)
{
echo "No se ha podido encontrar la Tabla";
}
else
{
echo "Tabla seleccionada" ;
}


$consulta = "SELECT * FROM usuario";
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['id_usuario']. "</td></h2>";
    echo "<td><h2>" . $colum['usuario'] . "</td></h2>";
    echo "<td><h2>" . $colum['contraseña'] . "</td></h2>";
    echo "<td><h2>" . $colum['correo'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";