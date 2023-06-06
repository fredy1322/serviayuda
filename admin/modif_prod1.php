<?php
include('db.php');
include('session.php');

$sql = "SELECT * FROM login";
if ($result=mysqli_query($conexion,$sql)) {
    $rowcount=mysqli_num_rows($result);
}
$admin = $_SESSION['cedula'];
 
$consultaadmin = "SELECT * FROM admi WHERE cedula = '$admin'";
      $resultadoadmin = mysqli_query($conexion, $consultaadmin) or die("Algo ha salido mal en la consulta a la base de datos");

     while ($columna = mysqli_fetch_array( $resultadoadmin ))
      {
      $nombre = $columna['nombre'];
      $cargo = $columna['cargo'];
      } 

 ?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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

    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full">

      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <a class="navbar-brand" href="index.php">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
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
            </a>
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >

            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
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
     <a href="cc.php" style="position: relative;" onClick="if (window.open) { window.open('cc.php', 'popup', 'toolbar=no,menubar=no,scrollbars=no,locat ion=no,resizable=no,width=400,height=220,top=212,left=1250 '); return false; }">
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
                    <i class="mdi mdi-account-key"></i>
                  </h1>
                  <h6 class="text-white">Agentes</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-collage"></i>
                  </h1>

                  <h6 class="text-white">Subir horarios</h6>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                    <i class="mdi mdi-border-outside"></i>
                  </h1>
                  <h6 class="text-white">Calidad</h6>
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
            
            <!-- Column -->
          </div>
      

<?php
  include 'db.php';
 $consulta=ConsultarProducto($_GET['ID']);

  function ConsultarProducto( $ID )
  {
   include 'db.php';
   $sentencia="SELECT * FROM login WHERE ID='".$ID."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['ID'],
    $fila['nombre'],
    $fila['cedula'],
    $fila['fechaingreso'],
    $fila['contrasena'],
    $fila['segmento'],
    $fila['ciudad']
   ];

  }

?>

  
  <div id="contenido">
    <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
      <span> <h1>Modificar agente</h1> </span>
      <br>
    <form action="modif_prod2.php" method="POST">
    <input type="hidden" name="ID"; value="<?php echo $consulta[0] ?>"><br>
      
      <label> Nombre: </label>
      <input type="text" id="nombre" style="width : 45%; text-align: center;"  name="nombre"; value="<?php echo $consulta[1] ?>"><br>
      
      <label>Cedula: </label>
      <input type="number" id="cedula" style="width : 46%; text-align: center;" name="cedula" value="<?php echo $consulta[2] ?>"><br>
      <label>Segmento: </label>
      <select style="width :44%; text-align: center;" name="segmento">
        <option hidden type="text" style="text-align: center;" value="<?php echo $consulta[5] ?>"><?php echo $consulta[5] ?> </option>
        <option  type="text" style=" text-align: center;" value="CLIENTE CORPORATIVO">CLIENTE CORPORATIVO</option>
        <option  type="text" style=" text-align: center;" value="WHATSAPP/CHATBOT">WHATSAPP/CHATBOT</option>
        <option  type="text" style=" text-align: center;" value="E-ENTREGA">E-ENTREGA</option>
        </select> <br>
        <label>Ciudad: </label>
        <select style="width :44%; text-align: center;" name="ciudad">
        <option hidden type="text" style="text-align: center;" value="<?php echo $consulta[6] ?>"><?php echo $consulta[6] ?> </option>
        <option  type="text" style=" text-align: center;" value="PEREIRA">PEREIRA</option>
        <option  type="text" style=" text-align: center;" value="BOGOTA">BOGOTA</option>
        </select> <br>
      <label>Fecha Ingreso: </label>
      <input type="date" id="cedula" style="width : 42%; text-align: center;" name="fechaingreso" value="<?php echo $consulta[3] ?>"><br>
  
 
      <button type="submit" class="btn btn-success">Guardar</button>

    </form>

<form action="modif_prod3.php" method="POST">
<input type="hidden" name="cedula"; value="<?php echo $consulta[2] ?>"><br>
      <div style="margin-top: -8.9%; margin-left: 10.5%;">
            <button type="submit" class="btn btn-success" style="background-color: gray;">Reset contraseña</button>
          </div>
        </form>
        <form action="desenganchar.php" method="POST">
<input type="hidden" name="cedula"; value="<?php echo $consulta[2] ?>"><br>
      <div style="margin-top: -10.7%; margin-left: 28%;">
            <button type="submit" class="btn btn-success" style="background-color: gray;">Desenganchar</button>
          </div>
        </form>
<div>
          <form action="modif_prod3-1.php" method="POST">
<input type="hidden" name="ID"; value="<?php echo $consulta[0] ?>"><br>
<input type="hidden" name="cedula"; value="<?php echo $consulta[2] ?>"><br>
<input type="hidden" name="nombre"; value="<?php echo $consulta[1] ?>"><br>
<input type="hidden" name="fechaingreso"; value="<?php echo $consulta[3] ?>"><br>

      <div style="margin-top: -22.2%; margin-left: 43.5%;">
            <button style="background: url(../assets/images/users/3.png); width: 64px; height: 62px; border: none;" ></button>
          </div>
        </form>
      </div>
     </form>
   </div>
  </div>
</div>
      </div>
      </table>
        <footer class="footer text-center">
          Ingresar
          <a href="#">Serviayuda</a>.

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
    <link href="../dist/css/style.min.css" rel="stylesheet" />
  </body>
</html>
