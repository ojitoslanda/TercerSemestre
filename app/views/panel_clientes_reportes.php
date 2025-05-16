<?php 
  session_start();
  if(isset($_SESSION["usuario_sesion"])){
    $nombre_usuario = $_SESSION["usuario_sesion"]["nombre"];
    $apellido_usuario = $_SESSION["usuario_sesion"]["apellido"];
    $privilegios_usuario = $_SESSION["usuario_sesion"]["id_rol"];
  }else{
    header("location: ../index.php");
    // echo "No existe la sessión";
    // exit();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Reporte de Clientes</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
    <!-- Incluir una vez todos los links -->
    <?php include_once("default/links-head.php") ?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper"> <!-- INICIO DEL DIV DEL CONTENEDOR -->
      <!-- Cabezera y Nav del lado izquierdo -->
      <?php require_once("default/navigation.php") ?>
      <!-- Content Wrapper - Contenido Principal-->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> Reporte de clientes <small>Control panel</small> </h1>
          <ol class="breadcrumb">
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Reporte Clientes</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content ">
          <div class="row">
            <div class="col-lg-12 table-responsive">
                <!--  INICIO REPORTE DE CLIENTE -->
                    <table class="table table-hover" style="background:#FFFF;">
                        <tr>
                            <th>DNI</th> 
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                        <?php 
                         require_once("../models/Clientes.php");    
                          $objeto = new Clientes();
                          $resultado_lista = $objeto->reportes_clientes();
                          while($fila = $resultado_lista->fetch_array(MYSQLI_ASSOC)){
                            echo "<tr>";
                            echo "<td>".$fila['dni']."</td>";
                            echo "<td>".$fila['nombre']."</td>";
                            echo "<td>".$fila['apellido']."</td>";
                            echo "<td>".$fila['correo']."</td>";
                            echo "<td>".$fila['estado']."</td>";
                            echo "<td>
                                    <button id='btnEditar' class='btn bg-light-blue-active color-palette'>
                                      <i class='fa fa-fw fa-edit'></i>
                                    </button>
                                    <button id='btnEliminar' class='btn bg-red-active color-palette'>
                                     <i class='fa fa-fw fa-trash'></i>
                                    </button>
                                  </td>";
                            echo "</tr>";
                          };
                        ?>
                    </table>
                <!--  FIN DE REPORTE DE CLIENTE-->
            </div>
          </div>
        </section>
      </div>
      <!-- Footer -->
      <?php require_once("default/footer.php");?>
    </div>  <!-- FINAL DEL DIV DEL CONTENEDOR -->
        <!-- Todos los scripts -->
      <script src="assets/js/reportes_clientes.js"></script>
      <?php require_once("default/links-script.php");?>
  </body>
</html>
