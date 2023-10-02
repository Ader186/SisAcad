<header class="main-header">
  <style type="text/css">
    #logonew {
      margin-top: 1px;
      height: 50px;
    }
    #logonew:hover, .skin-blue .main-header .logo:hover {
      background-color: #b5cbc4;
      margin: 0;
      padding: 0;
    }
    .dropdown-menu, .label {
      border-radius: 5px;
    }
    .dropdown-menu li.header {
      text-align: center;
    }
    .dropdown-item {
      width: 100%;
      cursor: pointer;
    }
    .btn-block {
      border-radius: 5px;
      width: 100%;
      cursor: pointer;
    }
    .btn-danger {
      background-color: #FF0000;
    }
  </style>
  <!-- Logo -->
  <a href="../index.php" class="logo">
    <img src="../imagenes/logo colegio-02.png" id="logonew" style="margin-left: -42px;  max-width: 282px ;max-height: 125px;padding: 0px 25px; position: relative;" > 
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu"><a href="../index.php"><i class="fa fa-home"></i>Inicio</a></li>
        <li class="dropdown tasks-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id ="semestAct">
            <i class="fa fa-flag-o"></i>
            <span class="label label-danger"></span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">Avance semestral</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      <b>indicador</b>
                      <small class="pull-right"><b>20% </b></small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">0% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer">
              <button id="btnSelectSemester" class="btn btn-sm btn-block btn-danger" onclick="ModalSeleccSemstre()">
                <i class="fa fa-refresh fa-fw"></i>Cambiar Semestre
              </button>
            </li>
          </ul>
        </li>
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-default"></span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">No tienes Notificaciones</li>
            <li class="footer"><a href="#">...</a></li>
          </ul>
        </li>
        <li class="dropdown user user-menu">
          <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
            <i class="fa fa-user fa-lg"></i>
          </a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right" style="width: 150px;height:250px;">
            <center>
              <img class="img-circle" alt="User Image" style="width: 50px;height: 50px;" id="veticalfotouser">
              <br>
              <p><?php echo $_SESSION['S_ROL']; ?></p>
            </center>
            <div class="container">
              <li class="dropdown-item settings-item" style="padding: 7px 0; " onclick="AbrirModalCambCont()">
                <i class="fa fa-cog fa-lg"></i>&nbsp;&nbsp;Configuración
              </li>
            </div>
            <style>
              .dropdown-item:hover {
                background-color: #ADD8E6;
                color: #000;
                cursor: pointer;
              }
            </style>
            <div class="container">
              <li class="dropdown-item" style="padding: 7px 0;">
                <i class="fa fa-user fa-lg"></i>&nbsp;&nbsp; Mi perfil
              </li>
            </div>
            <div class="container">
              <div class="col-lg-12">
                <li class="dropdownn-item dropdown-item-text-uppercase" style="padding: 30px 0;">
                  <a class="text-black btn btn-success" href="../controlador/usuario/controlador_cerrar_session.php">
                    <i class="fa fa-sign-out"></i>&nbsp; Cerrar
                  </a>
                </li>
              </div>
            </div>
          </ul>
        </li>
        
      </ul>
    </div>
  </nav>
</header>