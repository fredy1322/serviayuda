<?php
include('db.php');
include('session.php');

$admin = $_SESSION['cedula'];
$consultaadmin = "SELECT * FROM admi WHERE cedula = '$admin'";
$resultadoadmin = mysqli_query($conexion, $consultaadmin) or die("Algo ha salido mal en la consulta a la base de datos");

$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$mesactual = $meses[date('n')-1];
$mespasado = $meses[date('n')-2];
      
     while ($columna = mysqli_fetch_array( $resultadoadmin ))
      {
      $nombre = $columna['nombre'];
      $cargo = $columna['cargo'];
      
      } 

      $consulta = "SELECT * FROM mensaje WHERE ID = 2";
      $resultado = mysqli_query($conexion, $consulta) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultado ))
      {
      $mensaje = $columna['mensaje'];
      }

      $admin = $_SESSION['cedula'];
      
header("Refresh: 3600; URL='caducada.php'");

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="Serviayuda"
    />
    <meta
      name="description"
      content="Serviayuda"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Serviayuda administrador</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.php">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="../assets/images/logo-icon.png"
                  alt="homepage"
                  class="light-logo"
                  width="25"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2">
                <!-- dark Logo text -->
                <img
                  src="../assets/images/logo-text.png"
                  alt="homepage"
                  class="light-logo"
                />
              </span>
              <!-- Logo icon -->
              <!-- <b class="logo-icon"> -->
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

              <!-- </b> -->
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="  "
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <span class="d-none d-md-block"
                      > <i class=""></i
                    ></span>
                    <span class="d-block d-md-none"
                      ><i class="  "></i
                    ></span>
                  </a>
                
                   
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item search-box">
                <a
                  class="nav-link waves-effect waves-dark"
                  href="javascript:void(0)"
                  ><i class=""></i
                ></a>
                <form class="app-search position-absolute">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav float-end">
            <a href="cc.php">
                  <img
                    src="../assets/images/users/2.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="31">
                  </a> &nbsp;

            <a href="caducada.php" style="position: relative;">
                  <img
                    src="../assets/images/users/1.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="31">
                  </a>
                  </a>
                  </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Inicio</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="agentes.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-account-key"></i
                  ><span class="hide-menu">Agentes</span></a
                >
              </li>
              <?php if($cargo=='supervisor'){ ?>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
              href="subirhorarios.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-face"></i
                  ><span class="hide-menu">Subir horarios</span></a
                >
              </li> <?php } else { } ?>
              <?php if($cargo=='supervisor'){ ?>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
              href="interacciones.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-chart-line"></i
                  ><span class="hide-menu">Interacciones</span></a
                >
              </li> <?php } else { } ?>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="subirexcel.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-move-resize-variant"></i
                  ><span class="hide-menu">Calidad</span></a
                >
              </li> 
              <?php if($cargo=='supervisor'){ ?>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="mensaje.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-pencil"></i
                  ><span class="hide-menu">Mensaje</span></a
                >
              </li> <?php } else { } ?>
              <?php if($cargo=='supervisor'){ ?>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="chorario.php"
                  aria-expanded="false">
                  <i class="mdi mdi-clock"></i>
                  <span class="hide-menu">Cambio de horario</span></a
                >
              </li> <?php } else { } ?>
              <?php if($cargo=='supervisor'){ ?>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="vacio.php"
                  aria-expanded="false">
                  <i class="mdi mdi-beach"></i>
                  <span class="hide-menu">Vacios laborales <?php if(empty($rowcountch2)) { } else { ?>   <span class="parpadea text"><strong>🛑</strong> <?php } ?> </span></a
                >
              </li> <?php } else { } ?>
              
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <div class="page-wrapper">
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title"> <?php echo  $nombre;?> </h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"></a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
          <div class="container-fluid">

                    <div class="">

    
  <!DOCTYPE html>
  <html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg"/>
    <title>Subir archivos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/cargando.css">
    <link rel="stylesheet" type="text/css" href="css/cssGenerales.css">
  </head>
  <body>



  <div class="wrapper">

		
<section class="columns">
	
	<div class="column">
		<h2 style="text-align: center">Calidad <?php echo $mespasado?> consolidada</h2>
    <center><a href="plantillacalidad.csv"> <small> Descargar plantilla </small></a></center>
		<p>
    <form action="calidadmp.php" method="POST" enctype="multipart/form-data"/>
          <div class="file-input text-center" required>
              <input  type="file" name="dataCliente" id="file-input2" class="file-input__input"/ required>
              <label class="file-input__label" for="file-input2" required>
                <i class="zmdi zmdi-upload zmdi-hc-2x" required></i>
                <span>Elegir Archivo</span></label>
            <input type="submit" name="subir" class="btn-enviar" value="Subir archivo"/>
        </div>
        </form>
    </p>
  </div>
    	
	<div class="column">
		<h2 style="text-align: center">Calidad <?php echo $mesactual ?> (parcial)</h2>
    <center><a href="plantillacalidad.csv"> <small> Descargar plantilla </small></a>
		<p>
    <form action="calidadparcial.php" method="POST" enctype="multipart/form-data"/>

              <input  type="file" name="dataClientes" id="file-input" class="file-input__input"/ required>
              <label class="file-input__label" for="file-input" required>
                <i ></i>
                <span>Elegir Archivo</span></label>

            <input type="submit" name="subirsabado" class="btn-enviar" value="Subir archivos"/></center>

        </form>
    </p>
  </div>

</section>	


</div>


    </div>
    <a href="/Login/panelagente/calidadpasado.php" target="_blank"> <h6 class="text-center">

<strong>Ver calidad mes <?php echo $mespasado ?> </strong> </a>
</h6>

<a href="/Login/panelagente/calidadact.php" target="_blank"> <h6 class="text-center">

<strong>Ver calidad mes <?php echo $mesactual ?> </strong> </a>
</h6>

<!--         

          <table class="table table-bordered table-striped">
            <thead>
              <tr>
              
                 <th>Cédula</th>
                <th>Nombre</th>
                <th>Campaña</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
                <th>Break1</th>
                <th>Almuerzo</th>
                <th>Break2</th>  
                 <th>Sábado</th>
                 <th>Break sábado</th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table> -->
<!-- 
      </div>
    </div>

  </div> -->


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript">
      $(document).ready(function() {
          $(window).load(function() {
              $(".cargando").fadeOut(1000);
          });      
  });
  </script>

  </body>
  </html>

          </div>

        </table>
          <footer class="footer text-center">
            Ingresar
            <a href="#  ">Serviayuda</a>.

          </footer>
        </div>
      </div>
      <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap tether Core JavaScript -->
      <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
      <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
      <!--Wave Effects -->
      <script src="../dist/js/waves.js"></script>
      <!--Menu sidebar -->
      <script src="../dist/js/sidebarmenu.js"></script>
      <!--Custom JavaScript -->
      <script src="../dist/js/custom.min.js"></script>
      <script src="../assets/libs/flot/excanvas.js"></script>
      <script src="../assets/libs/flot/jquery.flot.js"></script>
      <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
      <script src="../assets/libs/flot/jquery.flot.time.js"></script>
      <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
      <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
      <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
      <script src="../dist/js/pages/chart/chart-page-init.js"></script>
      <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <link href="../dist/css/style.min.css" rel="stylesheet" />

      <style>




/* STRUCTURE */
.wrapper {
  padding: 5px;
  max-width: 600px;
  width: 95%;
  margin: 20px auto;
}


.columns {
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
  margin: 5px 0;
}

.column {
  flex: 1;
  border: 1px solid gray;
  margin: 2px;
  padding: 10px;
}
.column:first-child {
  margin-left: 0;
}
.column:last-child {
  margin-right: 0;
}



@media screen and (max-width: 980px) {
  .columns .column {
    margin-bottom: 5px;
    flex-basis: 40%;
  }
  .columns .column:nth-last-child(2) {
    margin-right: 0;
  }
  .columns .column:last-child {
    flex-basis: 100%;
    margin: 0;
  }
}
@media screen and (max-width: 680px) {
  .columns .column {
    flex-basis: 100%;
    margin: 0 0 5px 0;
  }
}

        </style>
    </body>
  </html>
