<?php

include 'head.php';

define('DURACION_MIN', 1);
define('DURACION_MAX', 100);

print '<form action="cookies_2.php" method="post">
  <p>Elija una opción</p>
  <ol>
    <li>Crear una cookie con una duración de 
      <input type="text" name="duracion" value="60" size="3" maxlength="2" id="cursor" /> 
      segundos (entre ' . DURACION_MIN . ' y ' . DURACION_MAX . ') 
      <input type="submit" value="Crear" name="crear" />
    </li>
    <br>
    <li>Obtener el valor la cookie 
      <input type="submit" value="modificar" name="obtener" />
    </li>
    <br>
    <li>Modificar el valor la cookie 
      <input type="submit" value="modificar" name="modificar" />
    </li>
    <br>
    <li>Destruir la cookie 
      <input type="submit" value="Destruir" name="destruir" />
    </li>
  </ol>
</form>';

if (isset($_REQUEST['crear'])) { //ha pulsado el boton crear

  $valor = rand(1, 100);
  setcookie('aleatoria', $valor, time() + 60);
}
if (isset($_REQUEST['obtener'])) { //ha pulsado el boton obtener

  if (isset($_COOKIE['aleatoria']))
    echo "El valor de la Cookie 'aleatoria' es [" . $_COOKIE['aleatoria'] . "]";
  else
    echo "<h2>No existe la Cookie</h2>";
}
if (isset($_REQUEST['modificar'])) { //ha pulsado el boton modificar
  //Para modificar una cookie ya existente, simplemente se debe volver a crear la cookie con el nuevo valor.
  if (isset($_COOKIE['aleatoria'])) //para comprobar que existe
  {
    $valor = rand(1, 100);
    setcookie('aleatoria', $valor, time() + 60);
  } else
    echo "<h2>No existe la Cookie</h2>";
}

if (isset($_REQUEST['destruir'])) { //ha pulsado el boton destruir
  if (isset($_COOKIE['aleatoria'])) //para comprobar que existe
      setcookie("nombre", "", time() - 1);
      else
         echo "<h2>No existe la Cookie</h2>";
}


include 'pie.php';
