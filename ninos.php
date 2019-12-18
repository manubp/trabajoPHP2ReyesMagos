<?php 

// Acceso a Base de Datos
$usuario = "manub";
$contrasena = "manub";
$baseDatos = "practica2";



$conexion = mysqli_connect("localhost:3306", $usuario, $contrasena, $baseDatos);

if (!$conexion) {
  exit('No se puede conectar:'. mysqli_error());
}

$consultaNino = "SELECT * from ninos ORDER BY 1";
$resultadoNino = mysqli_query($conexion, $consultaNino);

?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Lista de Niños</title>
  </head>
  <body background="data:image/jpeg;base64,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">

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="ninos.php">Niños</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="regalos.php">Regalos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="reyes.php">Reyes</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="busqueda.php">Busqueda</a>
    </li>
    </ul>
  </nav>

    <div class="container">
    
    <h1>Lista de niños</h1>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                <!-- Creación de la tabla -->    
                <table class="table table-dark table-bordered">
                        <tr class="table-primary">
                            <th id="info">Nombre</th>
                            <th id="info">Apellido</th>
                            <th id="info">Fecha de Nacimiento</th>
                            <th id="info">BUENO / MALO</th>
                        </tr>
                        <!-- Mientras haya elementos en la tabla segurá mostrandolos -->
                        <?php while ($filaTabla = mysqli_fetch_array($resultadoNino)) { ?>
                            <tr>
                              <!-- Recogemos el nombre y lo insertamos en la tabla -->
                                <td><?php echo($filaTabla["nombreNino"]); ?></td>
                              <!-- Recogemos el nombre y lo insertamos en la tabla -->
                                <td><?php echo($filaTabla["apellidosNino"]); ?></td>
                                <td><?php 
                                    //Ordenamos la fecha a formato dd/mm/yyy
                                    $fechaNacimientoNino = explode('-', $filaTabla["fechaNacimientoNino"]);
                                    echo($fechaNacimientoNino[2]."-".$fechaNacimientoNino[1]."-".$fechaNacimientoNino[0]);

                                ?></td>
                                <td>
                                    <?php
                                    //Si se encuentra el booleano 1 de nuestra BD nos sale un mensaje de que el niño ha sido bueno.
                                        if ($filaTabla["buenoSiNo"] == 1)
                                        {
                                            echo("HA SIDO UNA PERSONA BUENA");
                                            //En caso de ser diferente a 1 muestra un mensaje donde el niño ha sido malo.
                                        } else {
                                            echo("HA SIDO UNA PERSONA MALA");
                                        }
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>