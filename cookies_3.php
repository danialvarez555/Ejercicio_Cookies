<?php 

include 'head.php';
echo'<h1>Autenticar usuario y guardar en una cookie con PHP</h1><br><br>';
echo'<form action="prueba-cookies.php" method="post">
<table>
<tr>
<td>Usuario:</td>
<td><input type="text" name="usuario"></td>
</tr><tr>
<td>Clave:</td>
<td><input type="text" name="clave"></td>
</tr><tr>
<td colspan="2"><input type="checkbox" name="guardar_clave" value="1"> Memorizar el usuario en este ordenador</td>
</tr><tr>

<td><input type="submit" value="Entrar"></td>
</tr>
</table>
</form> ';



include 'pie.php';