<?php 

include 'head.php';
echo'En la siguiente página deberá aparecer el número de visitas que realiza un usuario al visitar la página;
 este contador conserva su valor durante un año aún a pesar de que un usuario cierre el navegador
  y tarde días en volver a visitar la página:
  <br><br><hr><br>';

  if(isset($_COOKIE['contador']))
  { 
    // Caduca en un año 
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60); 
    $mensaje = 'Número de visitas: ' . $_COOKIE['contador']; 
    echo $mensaje;
  } 
  else 
  { 
    // Caduca en un año 
    setcookie('contador', 1, time() + 365 * 24 * 60 * 60); 
    $mensaje = 'Bienvenido a nuestra página web'; 
    echo $mensaje;
  } 


include 'pie.php';