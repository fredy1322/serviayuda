<?php
include('db.php');
include('ejemplo.php');

       $ID = trim($_POST['ID']);
       $inombre = 'Espacio en blanco';
       $icedula = '0';
       $nombre = trim($_POST['nombre']);
       $cedula = trim($_POST['cedula']);
       $motivo = trim($_POST['motivo']);
       $contrasena = "Colombia123*";
       $ciudad = "Pereira";
       $hoy = date("d-m-Y");
       $fecharetiro = trim($_POST['fecharetiro']);

if(empty($fecharetiro) OR empty($motivo))  {
   

    echo '<script>
    jQuery(function(){
        swal({type: "error",
              icon: "error",
            title: "Campos vacios",
            text: "Por favor diligencie los datos completos: Fecha de retiro y motivo de retiro",

        }).then(function() {
            window.location.href = "/Login/admin/agentes.php";
        });
    });
  
    </script>';





} else { 

$actualizar2 = ("INSERT INTO backup (nombre,cedula,motivo,ciudad,fecha) VALUES('$nombre','$cedula','$motivo','$ciudad','$fecharetiro')");
$resultado2=mysqli_query($conexion,$actualizar2);
if($actualizar2) { 

$actualizar = ("UPDATE login SET nombre='$inombre', cedula='$icedula' , ciudad ='$ciudad' , fechaingreso='$hoy' WHERE ID ='$ID'"); 
$resultado=mysqli_query($conexion,$actualizar); }


if($actualizar) {
     echo '<script>
      jQuery(function(){
          swal({type: "success",
                icon: "success",
              title: "Usuario inhabilitado",
              text: "El usuario a sido inhabilitado satisfactoriamente",

          }).then(function() {
              window.location.href = "/Login/admin/agentes.php";
          });
      });
    
      </script>'; }
    }
      ?>
