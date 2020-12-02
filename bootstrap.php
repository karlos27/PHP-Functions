<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <title>PHP - Arrays</title>
  </head>
  <body>
    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light">
      <span class="navbar-brand mb-0 h1">PHP - Arrays</span>
    </nav>
    <br />
    <h5>Tabla Asociativa</h5>
    
    <?php 
    $tabla_0 = array('A1'=>'Juan','B4'=>'Pedro');
    $tabla_1 = array();
    $tabla_1['A1'] = 'Juan';
    $tabla_1['B4'] = 'Pedro';
    
    //Se utilitza cuando la clave tiene una información relevante;
    $persona = array();
    $persona['Apellido'] = 'Segarra';
    $persona['Nombre'] = 'Carlos';
    $persona['Edad'] = '37';
    ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Edad</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><?php echo $persona['Nombre']; ?></td>
          <td><?php echo $persona['Apellido']; ?></td>
          <td><?php echo $persona['Edad']; ?></td>
        </tr>
      </tbody>
    </table>

    <?php 
    $tabla_2 = array('Juan', 'Pedro', 'Carlos', 'Laura', 'Cristina');
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">First option - FOR</h4>
              <?php
              // for($i = 0; $i < 5; $i++){
              //   echo $tabla_2[$i] . '<br />';
              // }
              for($i = 0; $i < sizeof($tabla_2); $i++){ // También se podria realizar la misma operación con la función count();
                echo $tabla_2[$i] . '<br />';
              }
              ?>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
          </div>
        </div>
      </div>
    </div>

    <?php 
    $tabla_3 = array('A1'=>'Juan', 'A2'=>'Pedro', 'A3'=>'Carlos', 'A4'=>'Laura', 'A5'=>'Cristina');
    // El bucle foreach no utiliza contador, y por lo tanto, no es necesario estar pendiente del tamaño de la tabla;
    // También puede mostrar la clave de la tabla;
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Second option - FOREACH</h4>
              <?php
              foreach ($tabla_3 as $key => $value) {
                # code...
                echo $value . '<br />';
              }
              ?>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Clave</th>
                <th scope="col">Valor</th>
              </tr>
            </thead>
            <tbody>
            <?php
            foreach ($tabla_3 as $key => $value) {
              # code...
              ?>
              <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>
              </tr>
              <?php
            }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <?php

    // Muestra formato tabla;
    print_r($tabla_3);
    // Conocer número de elementos en una tabla;
    $thisSize = count($tabla_3);
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <div class="alert alert-primary" role="alert">
            <?php
            echo 'El tamaño de la tercera tabla es ' . $thisSize;
            ?>
          </div>
        </div>
      </div>
    </div>

    <?php
    // Buscar un elemento en una tabla;
    // Se podría añadir un tercer parámetro para tener en cuenta el tipo (string, integer...);
    $tabla_4 = array('A1'=>'Juan', 'A2'=>'Pedro', 'A3'=>'Carlos', 'A4'=>'Laura', 'A5'=>'Cristina', 'A6'=>'John', 'A7'=>'Percy');
    // if(in_array('John', $tabla_4)){
    if(in_array('John', $tabla_4, true)){
      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="alert alert-success" role="alert">
              <?php
              echo 'John SI está en la tabla_4';
              ?>
            </div>
          </div>
        </div>
      </div>
      <?php
      } else{
        ?>
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-md-1">
              <div class="alert alert-danger" role="alert">
                <?php
                echo 'John NO está en la tabla_4';
                ?>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
    ?>

    <?php 
    $presencia_valor = in_array('John', $tabla_4);
    if($presencia_valor == 1){
      echo 'TRUE';
    }
    ?>

    <?php
    // Buscar una clave en una tabla; 
    $tabla_5 = array('A1'=>'Juan', 'A2'=>'Pedro', 3=>'Carlos', 'A4'=>'Laura', 'A5'=>'Cristina', 'A6'=>'John', 'A7'=>'Percy');
    if(array_key_exists('A4', $tabla_5)){
      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="alert alert-success" role="alert">
              <?php
              echo 'La clave A4 está en la tabla. Su valor es: ' . $tabla_5['A4'];
              ?>
            </div>
          </div>
        </div>
      </div>
      <?php
      } else{
        ?>
        <div class="container">
          <div class="row">
            <div class="col-md-10 offset-md-1">
              <div class="alert alert-danger" role="alert">
                <?php
                echo 'La clave 3 NO está en la tabla';
                ?>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
    ?>


    <?php 
    $presencia_clave = array_key_exists(3, $tabla_5);
    if($presencia_clave == 1){
      echo 'TRUE';
    }
    ?>
    
    <h5>Ordenar una tabla</h5>  
    <h6>sort()</h6> 
    <?php 
    $tabla_6 = array('A1'=>'AZUL', 'A2'=>'ROJO', 'A3'=>'VERDE', 'A4'=>'NEGRO', 'A5'=>'AMARILLO', 'A6'=>'GRIS');
    sort($tabla_6);
    foreach ($tabla_6 as $key => $value) {
      # code...
      echo 'Clave: ' . $key . ' => ' . 'valor: ' . $value . '.' . '<br />';
    }
    ?>
    <br />
    <h6>asort()</h6> 
    <?php 
    $tabla_7 = array('A1'=>'AZUL', 'A2'=>'ROJO', 'A3'=>'VERDE', 'A4'=>'NEGRO', 'A5'=>'AMARILLO', 'A6'=>'GRIS');
    asort($tabla_7);
    foreach ($tabla_7 as $key => $value) {
      # code...
      echo 'Clave: ' . $key . ' => ' . 'valor: ' . $value . '.' . '<br />';
    }
    ?>
    <br />
    <h6>rsort()</h6> 
    <?php 
    $tabla_8 = array('A1'=>'AZUL', 'A2'=>'ROJO', 'A3'=>'VERDE', 'A4'=>'NEGRO', 'A5'=>'AMARILLO', 'A6'=>'GRIS');
    rsort($tabla_8);
    foreach ($tabla_8 as $key => $value) {
      # code...
      echo 'Clave: ' . $key . ' => ' . 'valor: ' . $value . '.' . '<br />';
    }
    ?>
    <br />
    <h6>arsort()</h6> 
    <?php 
    $tabla_9 = array('A1'=>'AZUL', 'A2'=>'ROJO', 'A3'=>'VERDE', 'A4'=>'NEGRO', 'A5'=>'AMARILLO', 'A6'=>'GRIS');
    arsort($tabla_9);
    foreach ($tabla_9 as $key => $value) {
      # code...
      echo 'Clave: ' . $key . ' => ' . 'valor: ' . $value . '.' . '<br />';
    }
    ?>
    <br />
    <h6>ksort()</h6> 
    <?php 
    $tabla_10 = array('A1'=>'AZUL', 'A2'=>'ROJO', 'A3'=>'VERDE', 'A4'=>'NEGRO', 'A5'=>'AMARILLO', 'A6'=>'GRIS');
    ksort($tabla_10);
    foreach ($tabla_10 as $key => $value) {
      # code...
      echo 'Clave: ' . $key . ' => ' . 'valor: ' . $value . '.' . '<br />';
    }
    ?>
    <br />
    <h6>krsort()</h6> 
    <?php 
    $tabla_11 = array('A1'=>'AZUL', 'A2'=>'ROJO', 'A3'=>'VERDE', 'A4'=>'NEGRO', 'A5'=>'AMARILLO', 'A6'=>'GRIS');
    krsort($tabla_11);
    foreach ($tabla_11 as $key => $value) {
      # code...
      echo 'Clave: ' . $key . ' => ' . 'valor: ' . $value . '.' . '<br />';
    }
    ?>
    <br />
    <h6>array_search()</h6> 
    <?php 
    $tabla_12 = array('A1'=>'AZUL', 'A2'=>'ROJO', 'A3'=>'VERDE', 'A4'=>'NEGRO', 'A5'=>'AMARILLO', 'A6'=>'GRIS');
    $key_element = array_search('VERDE', $tabla_12);
    echo 'La clave elemento buscado es: ' . $key_element;
    ?>
    <br />
    <h6>explode()</h6> 
    <?php
    $group_0 = '1;2;3;4;5'; 
    $tabla_13 = explode(';', $group_0);
        echo 'El primer valor de la tabla es: ' . $tabla_13[0] . '<br />';
        echo 'El segundo valor de la tabla es: ' . $tabla_13[1] . '<br />';
        echo 'El tercer valor de la tabla es: ' . $tabla_13[2] . '<br />';
        echo 'El cuarto valor de la tabla es: ' . $tabla_13[3] . '<br />';
        echo 'El quinto valor de la tabla es: ' . $tabla_13[4] . '<br />';
    ?>
    <br />
    <?php
    $group_1 = '1-2-3-4-5'; 
    $tabla_14 = explode('-', $group_1);
    foreach ($tabla_14 as $key => $value) {
      # code...
      echo $value . ';';
    }
    ?>
    <br />
    <h6>implode()</h6> 
    <?php
    $tabla_15 = array('CARLOS', 'JUAN', 'CRISTINA', 'ELENA');
    $nombres = implode(';', $tabla_15);
    echo 'Los nombres son: ' . $nombres;
    ?>
    <br />
    <h6>str_split()</h6> 
    <?php
    $group_2 = '1;2;3;4;5;';
    $tabla_16 = str_split($group_2, 2);
    echo 'Los elementos son: ';
    foreach ($tabla_16 as $key => $value) {
      # code...
      echo $value . ' ';
    }
    ?>
    <br />
    <?php
    $group_3 = '11=12=13=14=15=';
    $tabla_17 = str_split($group_3, 3);
    echo 'Los elementos son: ';
    foreach ($tabla_17 as $key => $value) {
      # code...
      echo $value . '<br />';
    }
    ?>
    <br />
    <h6>array_push()</h6> 
    <?php
    $tabla_18 = array('CARLOS', 'JUAN', 'CRISTINA', 'ELENA');
    array_push($tabla_18, 'PEDRO', 'LAURA');
    print_r($tabla_18);
    ?>
    <br />
    <?php
    echo $tabla_18[4];
    ?>
    <br />
    <?php
    $tabla_19 = array();

    for ($i=0; $i < 10; $i++) { 
      # code...
      array_push($tabla_19, $i);
      echo $tabla_19[$i] . ';';
    }

    ?>
    <br />
    <h6>array_pop()</h6> 
    <?php
    $tabla_20 = array('CARLOS', 'JUAN', 'CRISTINA', 'ELENA');
    $nombre = array_pop($tabla_20);
    echo 'El nombre eliminado es: ' . $nombre;
    ?>
    <br />
    <?php
    $tabla_21 = array('CARLOS', 'JUAN', 'CRISTINA', 'ELENA');
    echo 'Antes de la eliminación, el número de elementos en la tabla es: ' . count($tabla_21) . '<br />';
    $nombre = array_pop($tabla_21);
    echo 'El nombre eliminado es: ' . $nombre . '<br />';
    $total_elementos = count($tabla_21);
    echo 'Después de la elimincación el número total de elementos es: ' . $total_elementos . '<br />';
    ?>
    <br />
    <?php
    $tabla_22 = array('CARLOS', 'JUAN', 'CRISTINA', 'ELENA');
    echo 'Antes de la eliminación, el número de elementos en la tabla es: ' . count($tabla_22) . '<br />';
    $total_elementos = count($tabla_22);

    for ($i=0; $i < $total_elementos; $i++) { 
      # code...
      $nombre = array_pop($tabla_22);
      $intra_total = count($tabla_22);
      echo 'El nombre eliminado es: ' . $nombre . '<br />';
      echo 'Después de la elimincación el número total de elementos es: ' . $intra_total . '<br />';
    }
    ?>
    <br />
    <h6>array_rand()</h6> 
    <?php
    $tabla_23 = array('CARLOS', 'JUAN', 'CRISTINA', 'ELENA');
    $nombre_aleatorio = array_rand($tabla_23);
    echo 'El nombre seleccionado al azar  es: ' . $tabla_23[$nombre_aleatorio];
    ?>
    <br />
    <?php
    $tabla_24 = array('CARLOS', 'JUAN', 'CRISTINA', 'ELENA', 'SONIA', 'MARIA', 'OSCAR', 'JORDI');
    $nombre_aleatorio = array_rand($tabla_24, 2);
    echo 'El PRIMER nombre seleccionado al azar es: ' . $tabla_24[$nombre_aleatorio[0]] . '<br />';
    echo 'El SEGUNDO nombre seleccionado al azar es: ' . $tabla_24[$nombre_aleatorio[1]] . '<br />';
    ?>
    <br />
    <h5>Array de varias dimensiones</h5>
    <br />
    <?php
    $tabla_caracteristica_0 = array('Nombre' => 'CARLOS', 'Apellidos' => 'SEGARRA GONZALEZ', 'Edad' => '37', 'Profesión' => 'Ambientólogo');
    $tabla_caracteristica_1 = array('Nombre' => 'SANTI', 'Apellidos' => 'DE PABLO RUIZ', 'Edad' => '38', 'Profesión' => 'Músico');
    $tabla_caracteristica_2 = array('Nombre' => 'PAU', 'Apellidos' => 'ARGILÉS BURGUÉS', 'Edad' => '38', 'Profesión' => 'Profesor');
    $tabla_caracteristica_3 = array('Nombre' => 'ALBERT', 'Apellidos' => 'ROSSELLÓ MIR', 'Edad' => '38', 'Profesión' => 'Gestor');

    $tabla_persona['CARLOS'] = $tabla_caracteristica_0;
    $tabla_persona['SANTI'] = $tabla_caracteristica_1;
    $tabla_persona['PAU'] = $tabla_caracteristica_2;
    $tabla_persona['ALBERT'] = $tabla_caracteristica_3;

    echo $tabla_persona['CARLOS']['Profesión'] . '<br />';
    echo $tabla_persona['SANTI']['Profesión'] . '<br />';
    echo $tabla_persona['PAU']['Profesión'] . '<br />';
    echo $tabla_persona['ALBERT']['Profesión'] . '<br />';
    ?>
    <br />
    <?php
    $persona['CARLOS']['Nombre'] = 'CARLOS';
    $persona['CARLOS']['Apellidos'] = 'SEGARRA GONZALEZ';
    $persona['CARLOS']['Edad'] = '37';
    $persona['CARLOS']['Profesión'] = 'Ambientólogo';

    echo $persona['CARLOS']['Apellidos'];
    ?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>