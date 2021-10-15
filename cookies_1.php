<?php 
include 'head.php';

   if(isset($_REQUEST['guardar']))
    {
      //Observa que para indicar el tiempo de vida como usamos la función time(), 
      //que devuelve el número de segundos desde el 1 de Enero de 1970.
     setcookie("usuario", $_POST['nombreForm'], time()+3600);
     setcookie("dominio", $_POST['dominioForm'], time()+3600);
    }
 
   if($_COOKIE) //si existen cookies
    {
     echo "Hay Cookies!: <br>";
      print_r($_COOKIE);
    }
   else
    {
     echo "No hay Cookies :( <br>";
 
    }

  echo'<p>
        <br> <strong>¡Hola!, vamos a grabarte en cookie:</strong><br><br>
    </p>
      <form action="cookies_1.php" method="post">
         Nombre: <input type="text" name="nombreForm"> <br> <br>
         Dominio: <input type="text" name="dominioForm"> <br> <br>
         <input type="submit" name="guardar" value="Guardar Cookie">
      </form>
  </body> 
  </html>';

        

include 'pie.php';


