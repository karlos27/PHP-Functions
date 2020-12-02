<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom_practice.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PHP - Practice</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light justify-content-between">
      <a class="navbar-brand">Exercises</a>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
      </form>
    </nav>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Ejercicio 1</h4>
            <p>Cree una tabla que contenga los números del 1 al 10 y otra tabla con los números del 11 al 20. A continuación, cree otra tabla con la suma de las dos primeras tablas y muestre sus valores. Para crear esas tablas, utilice los bucles.</p>
            <hr>
            <p class="mb-0">PHP y MySQL. Aprender a desarrollar un sitio web. Capítulo 4.</p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="alert alert-light" role="alert">
            <h4 class="alert-heading">Respuesta</h4>
              <div class="container">
                <div class="row">
                  <div class="col">
                    <?php 
                    $tabla1 = array();
                    $tabla2 = array();
                    $total  = array();

                    for ($i = 1; $i <=10 ; $i++) { 
                      # code...
                      $tabla1[$i] = $i;
                      echo $tabla1[$i];
                    }
                    ?>
                    <hr>

                    <?php
                    for ($i = 1; $i <=10 ; $i++) { 
                      # code...
                      $tabla2[$i] = $i + 10;
                      echo $tabla2[$i];
                    }
                    ?>
                    <hr>
                    <?php
                    for ($i = 1; $i <=10 ; $i++) { 
                      # code...
                      $total[$i] = $tabla1[$i] + $tabla2[$i];
                      echo $total[$i];
                    }
                    ?>
                  </div>
                </div>
              </div>
            <hr>
            <p class="mb-0"></p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Ejercicio 2</h4>
            <p>Cree una tabla con 10 valores al azar entre 1 y 100. La función rand($min, $max); permite obtener un número al azar entre $min y $max. Ordene esta tabla del valor mayor a menor, introduzca todos los valores en una cadena de caracteres separados por; y muestre la cadena.</p>
            <hr>
            <p class="mb-0">PHP y MySQL. Aprender a desarrollar un sitio web. Capítulo 4.</p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="alert alert-light" role="alert">
            <h4 class="alert-heading">Respuesta</h4>
              <div class="container">
                <div class="row">
                  <div class="col">
                  <?php
                  $tabla = array();
                  $min = 1;
                  $max = 100;
                  for ($i = 1; $i <=10 ; $i++) { 
                    # code...
                    $tabla[$i] = rand($min, $max);
                    // array_push($tabla, $valor_azar);
                  }

                  asort($tabla);
                  $valores = implode(';', $tabla);
                  echo 'Los valores son: ' . $valores;
                  
                  ?>  
                  </div>
                </div>
              </div>
            <hr>
            <p class="mb-0"></p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Ejercicio 3</h4>
            <p>En la sección Tabla con varias dimensiones, hemos visto el código que se utiliza para crear esta tabla multidimensional. Cree el código PHP que permita generar esta tabla en HTML con ayuda de los bucles.</p>
            <hr>
            <p class="mb-0">PHP y MySQL. Aprender a desarrollar un sitio web. Capítulo 4.</p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="alert alert-light" role="alert">
            <h4 class="alert-heading">Respuesta</h4>
              <div class="container">
                <div class="row">
                  <div class="col">
                  <?php
                  $array_caracteristica_PABLO = array("Nombre" => "Pablo", "Profesión" => "ministro", "Edad" => "50");
                  $array_caracteristica_ROBERTO = array("Nombre" => "Roberto", "Profesión" => "agricultor", "Edad" => "45");
                  $array_persona['PABLO'] = $array_caracteristica_PABLO;
                  $array_persona['ROBERTO'] = $array_caracteristica_ROBERTO;
                  echo '<table border="1">';
                  echo '<tr><td>';
                  echo 'Clave';
                  echo '</td><td colspan="2">';
                  echo 'Valor';
                  echo '</td></tr>';

                  foreach ($array_persona as $key => $value) {
                    echo '<tr><td rowspan="4">';
                    echo $key;
                    echo '</td>';
                    echo '<td>Clave</td><td>Valor</td></tr>';

                    foreach ($value as $key2 => $value2) {
                      echo '<tr>';
                      echo '<td>' . $key2 . '</td>';
                      echo '<td>' . $value2 . '</td>';
                      echo '</tr>';
                    }
                  }

                  echo '</table>';

                  ?>  
                  </div>
                </div>
              </div>
            <hr>
            <p class="mb-0"></p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Ejercicio 4</h4>
            <p>Observe estas dos tablas. La tabla1 se compone de los siguientes elementos: 6,25,35 y 61. La tabla2 se compone de los siguientes elementos: 12,24 y 46. Escriba el código con el valor S que permita calcular un valor representativo de estas dos tablas. El valor S se calcula multiplicando cada valor de la tabla1 por el valor de la tabla2 y sumando el total. En este ejemplo, el valor S será igual a: 12*6+12*25+12*35+12*61+24*6+24*25+24*35+24*61+46*6+46*25+46*35+46*61.</p><br><p>Sin duda alguna, para realizar este ejercicio debe utilizar los bucles.</p>
            <hr>
            <p class="mb-0">PHP y MySQL. Aprender a desarrollar un sitio web. Capítulo 4.</p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="alert alert-light" role="alert">
            <h4 class="alert-heading">Respuesta</h4>
              <div class="container">
                <div class="row">
                  <div class="col">
                  <?php
                  $tabla1 = array(6,25,35,61);
                  $tabla2 = array(12,24,46);
                  $suma = 0;
                  $tabla1_length = count($tabla1);
                  $tabla2_length = count($tabla2);
                  for ($i=0; $i < ($tabla1_length-1); $i++) { 
                    for ($j=0; $j < ($tabla2_length-1); $j++) { 
                      $suma = $suma + $tabla1[$i] * $tabla2[$j];
                    }
                  }
                  echo 'El valor S es: ' . $suma;
                  ?>  
                  </div>
                </div>
              </div>
            <hr>
            <p class="mb-0"></p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Ejercicio 5</h4>
            <p>Cuándo se acceda su página PHP, muestre los banners de forma aleatoria entre tres opciones. Los elementos de esos banners son una imagen, un enlace y una descripción de esta imagen. Estos elementos se almacenan en una tabla.</p>
            <hr>
            <p class="mb-0">PHP y MySQL. Aprender a desarrollar un sitio web. Capítulo 4.</p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="alert alert-light" role="alert">
            <h4 class="alert-heading">Respuesta</h4>
              <div class="container">
                <div class="row">
                  <div class="col">
                  <?php
                  $Banners = array(
                    1 => array('https://www.greenpoint.com', 'https://www.greenpoint.com/banner1.gif', 'Descripción1'), 
                    2 => array('https://www.greenpoint.com', 'https://www.greenpoint.com/banner2.gif', 'Descripción2'), 
                    3 => array('https://www.greenpoint.com', 'https://www.greenpoint.com/banner3.gif', 'Descripción3'));
                  $opcion = array_rand($Banners, 1);
                  echo '<a href="', $Banners[$opcion][0] ,'" title="', $Banners[$opcion][2] ,'">';
                  echo '<img src="', $Banners[$opcion][1] ,' alt="', $Banners[$opcion][2] ,'">';
                  echo '</a>';
                  ?>  
                  </div>
                </div>
              </div>
            <hr>
            <p class="mb-0"></p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <!-- <br> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>