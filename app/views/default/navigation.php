      <!-- Header -->
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>D</b>RS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>D'</b>Rossi</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members
                          joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long
                          description here that may not fit into the page and
                          may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members
                          joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25
                          sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your
                          username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img
                    src="html/dist/img/user2-160x160.jpg"
                    class="user-image"
                    alt="User Image"
                  />
                  <span class="hidden-xs">
                    <?php //inicio
                      echo $nombre_usuario." ".$apellido_usuario
                    //cierre ?>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img
                      src="html/dist/img/user2-160x160.jpg"
                      class="img-circle"
                      alt="User Image"
                    />
                    <p>
                      <?php //inicio
                      echo $nombre_usuario." ".$apellido_usuario
                     //cierre ?> - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="../controllers/cerrar_sesion.php" class="btn btn-default btn-flat"> Cerrar Sesion</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="html/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php //inicio
                      echo $nombre_usuario." ".$apellido_usuario
                    //cierre ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
              <?php 
              // 1 = ADMIN  -- 2 = USUARIO NORMAL
              if($privilegios_usuario == 1){
              ?>
                <!-- Inicio Escribimos el html -->
                <li class="active">
                  <a href="#"> <i class="fa fa-dashboard"></i> <span>Dashboard</span>  </a>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-user-plus"></i> <span>Clientes</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="panel_clientes.php"><i class="fa fa-circle-o"></i> Registrar</a>
                    </li>
                    <li>
                      <a href="panel_clientes_reportes.php"><i class="fa fa-circle-o"></i> Reportes</a>
                    </li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-cube"></i> <span>Productos</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Sub Item 1 </a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Sub Item 2 </a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Sub Item 3</a>
                    </li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-users"></i> <span>Usuarios</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Sub Item 1</a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Sub Item 2</a>
                    </li>
                  </ul>
                </li>
                 <li>
                  <a href="#"><i class="fa fa-shopping-cart"></i> <span>Ventas</span> </a>
                </li>
                 <!-- Fin del escribir del html -->
              <?php
              }else{
               ?>
                <!-- Inicio Escribimos el html -->
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-user-plus"></i> <span>Clientes</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                      <a href="panel_clientes.php"><i class="fa fa-circle-o"></i> Registrar</a>
                    </li>
                    <li>
                      <a href="panel_clientes_reportes.php"><i class="fa fa-circle-o"></i> Reportes</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#"><i class="fa fa-shopping-cart"></i> <span>Ventas</span> </a>
                </li>
                 <!-- Fin del escribir del html -->
              <?php  
              }
              ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>