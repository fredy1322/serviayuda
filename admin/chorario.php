<?php
include('db.php');
include('session.php');
include('ejemplo.php');

$idsession = session_id();
$agente = $_SESSION['cedula'];

$sqlcuentachx = "SELECT * FROM vacio WHERE estado='activo'";
if ($resultachx=mysqli_query($conexion,$sqlcuentachx)) {
    $rowcountchx=mysqli_num_rows($resultachx);
}

$actualizar = ("UPDATE admi SET idsession='$idsession' WHERE cedula ='$agente'");
$resultado=mysqli_query($conexion,$actualizar);


$sql = "SELECT * FROM login";
if ($result=mysqli_query($conexion,$sql)) {
    $rowcount=mysqli_num_rows($result);
}

$sqlcuentach2 = "SELECT * FROM ch2";
if ($resultach2=mysqli_query($conexion,$sqlcuentach2)) {
    $rowcountch2=mysqli_num_rows($resultach2);
}

$admin = $_SESSION['cedula'];
 
$consultaadmin = "SELECT * FROM admi WHERE cedula = '$admin'";
      $resultadoadmin = mysqli_query($conexion, $consultaadmin) or die("Algo ha salido mal en la consulta a la base de datos");
      
     while ($columna = mysqli_fetch_array( $resultadoadmin ))
      {
      $nombre = $columna['nombre'];
      $cargo = $columna['cargo'];
      } 

$consultamensaje = "SELECT * FROM mensaje WHERE ID = '1'";
      $resultadomensaje = mysqli_query($conexion, $consultamensaje) or die("Algo ha salido mal en la consulta a la base de datos");

      while ($columna = mysqli_fetch_array( $resultadomensaje ))
      {
      $mensaje1 = $columna['mensaje'];
      } 


$consultamensaje2 = "SELECT * FROM mensaje WHERE ID = '2'";
      $resultadomensaje2 = mysqli_query($conexion, $consultamensaje2) or die("Algo ha salido mal en la consulta a la base de datos");

      
      while ($columna = mysqli_fetch_array( $resultadomensaje2 ))
      {
      
      $mensaje2 = $columna['mensaje'];
      } 

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
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->

              <!-- Messages -->
 <a href="cc.php">
                  <img
                    src="../assets/images/users/2.jpg"
                  

                    alt="user"
              
                    class="rounded-circle"
                    width="31">
                  </a>

                  
&nbsp;

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
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
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
                  <span class="hide-menu">Vacios laborales <?php if(empty($rowcountchx)) { } else { ?>   <span class="parpadea text"><strong>🛑</strong> <?php } ?> </span></a>
              </li> <?php } else { } ?>
              
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
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
          <!-- ============================================================== -->
          <!-- Sales Cards  -->
          <!-- ============================================================== -->
          <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-cyan text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-view-dashboard"></i>
                  </h1>
                  <h6 class="text-white">Total de agentes</h6>
                      <h6 class="text-white"> <?php echo "$rowcount" ?> </h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-success text-center">
                  <h1 class="font-light text-white">
                   <h6 class="text-white">Mensaje importante:</h6>
                  </h1>
                  <h6 class="text-white"><?php echo "$mensaje1" ?></h6>
                </div>
              </div>
            </div>
            <!-- Column -->
                     <div class="col-md-6 col-lg-4 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                   <h6 class="text-white">Mensaje horarios:</h6>
                  </h1>
                  <h6 class="text-white"><?php echo "$mensaje2" ?></h6>
                </div>
              </div>
            </div>
            <!-- Column -->
           
            <div class="col-md-6 col-lg-2 col-xlg-3" >
              <div class="card card-hover" href="www.google.com">
                <div class="box bg-info text-center" >
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-arrow-all"></i>
                  </h1>
                  <h6 class="text-white">Horarios</h6>
      </div>
    </div>
  </div>
<?php if(empty($rowcountch2)) { ?>
   <h4> No cuenta con solicitudes pendientes para cambio de horario. </h4>
<?php } else { ?>


  <h2 class="text-black" style="text-align: center; padding-bottom: 3%;">Solicitud de cambio de horarios</h2>
          
<!-- CODIGO NUEVO -->

<table class="tablahorarios">
<thead>
  <tr>
      <th> Nombre solicitante </th>
      <th> Horario  </th>
      <th> Nombre facilitador </th>
      <th> Horario </th>
      <th> Segmento </th>
      <th> Dia </th>
      <th> Aprobar </th>
      <th> Rechazar </th>
      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
  </tr>
</thead>
  <tbody>
      <?php
                $sentencia="SELECT * FROM ch2 order by id ASC";
                $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
                      while ($filas = mysqli_fetch_array($resultado)) {  ?> 
<tr>  

<td><?php echo $filas['solicitante'] ; ?></td>
<td><?php echo $filas['hsolicitante']; ?></td>
<td><?php echo $filas['facilitador']; ?></td>
<td><?php echo $filas['hfacilitador']; ?></td>
<td><?php echo $filas['segmento']; ?></td>
<td><?php echo $filas['dia']; ?></td>


    <td>  <a class="fcc-btn" href="/Login/cambiohorario/acciones/supervisoracepta.php?id=<?php echo $filas['id']; ?>"> <button class="btn btn-success"> Aprobar </button></a> </td>
    <td>  <a class="fcc-btn" href="/Login/cambiohorario/acciones/supervisorrechaza.php?id=<?php echo $filas['id']; ?>"> <button class="btn btn-danger"> Rechazar </button></a> </td>

    </tbody>
    <?php  } ?>
    <?php } ?>
    </table>

    





<!-- FIN CODIGO NUEVO -->
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
    

        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../assets/libs/flot/excanvas.js"></script>
    <script src="../assets/libs/flot/jquery.flot.js"></script>
    <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../dist/js/pages/chart/chart-page-init.js"></script>
    <footer class="footer text-center">
          Ingresar
          <a href="#">Serviayuda</a>.

        </footer>
  </body>
</html>

