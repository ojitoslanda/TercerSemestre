<?php
session_start();
if (isset($_SESSION["usuario_sesion"])) {
  $nombre_usuario = $_SESSION["usuario_sesion"]["nombre"];
  $apellido_usuario = $_SESSION["usuario_sesion"]["apellido"];
  $privilegios_usuario = $_SESSION["usuario_sesion"]["id_rol"];
} else {
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
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
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
        <h1> VENTAS <small>Control panel</small> </h1>
        <ol class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Ventas</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content ">
        <div class="row">

          <div class="col-lg-12">
            <!--  ========= INICIO Datos del cliente ========= -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title"> <b> Datos del cliente </b></h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="box-body">
                <form role="form">
                  <div class="col-lg-12">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">DNI</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el DNI">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nombre Completo</label>
                        <input type="text" class="form-control" id="#" readonly disabled="true" placeholder="Ej. Juan Aguilar">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Correo Electronico</label>
                        <input type="email" class="form-control" id="#" readonly disabled="true" placeholder="Ej. cliente@email.com">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!--  ========= FIN Datos del cliente=========-->


            <!--  ========= INICIO Datos de la Venta ========= -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title"> <b> Datos de la venta</b></h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="box-body">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Vendedor</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" disabled="true" readonly id="####">
                    </div>
                    <!-- /.input group -->
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Rol</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-briefcase"></i>
                      </div>
                      <input type="text" class="form-control" disabled="true" readonly id="##">
                    </div>
                    <!-- /.input group -->
                  </div>
                </div>
                <div class="col-lg-12">
                  <table class="table table-hover table-responsive table-sm" id="tablaProductos">
                    <thead>
                      <tr>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Stock</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Precio Total</th>
                        <th>Agregar</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                      <tr>
                        <td><input type="text" class="form-control" id="codigo_producto" placeholder="000" style="width:10vw; text-align: center;"></td>
                        <td>Lorem ipsum dolor sit amet consectetur</td>
                        <td>22</td>
                        <td><input type="text" class="form-control" id="cantidad" placeholder="000" style="width:10vw; text-align: center;"></td>
                        <td>300</td>
                        <td>60000</td>
                        <td><button class="btn btn-success">Agregar</button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="col-lg-12">
                  <table class="table table-hover table-responsive table-sm" id="tablaProductos">
                    <thead>
                      <tr>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                        <th>Acción</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                      <tr>
                        <td colspan="3" class="total">SUBTOTAL</td>
                        <td id="subtotal">0.00</td>
                        <td></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <div class="col-lg-12 text-center"> 
                     <button class="btn btn-lg btn-primary">
                      <i class="fa fa-cloud-upload"></i>
                      Generar Venta
                    </button>
                </div>
              </div>
            </div>
            <!--  ========= FIN Datos de la Venta=========-->
          </div>

        </div>
      </section>
    </div>
    <!-- Footer -->
    <?php require_once("default/footer.php"); ?>
  </div> <!-- FINAL DEL DIV DEL CONTENEDOR -->
  <!-- Todos los scripts -->
  <?php require_once("default/links-script.php"); ?>
</body>

</html>