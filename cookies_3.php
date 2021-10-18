<?php 

include 'head.php';
$usuario=""; //para que no de error
$pass="";

if(isset($_REQUEST['Entrar']))
{ 
    
    if(isset($_REQUEST['guardar_clave'])) //si has dicho guardar clave se crean las dos cookies
    {
        setcookie("usuario", $_REQUEST['usuario'], time()+3600);
        setcookie("clave", $_REQUEST['clave'], time()+3600);
    }
}
if(isset($_COOKIE['usuario'])) //si existe esta cookie se crean las siguientes variables
{
    $usuario=$_COOKIE['usuario'];
    $pass=$_COOKIE['clave'];
}

echo'<h1>Autenticar usuario y guardar en una cookie con PHP</h1><br><br>';
echo'<form action="cookies_3.php" method="post">
<table>
<tr>
<td>Usuario:</td>
<td><input type="text" name="usuario" value="'.$usuario.'" required></td>
</tr><tr>
<td>Clave:</td>
<td><input type="password" name="clave" value="" required></td>
</tr><tr>
<td colspan="2"><input type="checkbox" name="guardar_clave" value="1"> Memorizar el usuario en este ordenador</td>
</tr><tr>

<td><input type="submit" name="Entrar" value="Entrar"></td>
</tr>
</table>
</form> ';
include 'pie.php';