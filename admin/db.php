<?php

$conexion= mysqli_connect("localhost","root","S3rv1t3l4dm1n128//","serviayuda");

$sqlcuentach2 = "SELECT * FROM vacio WHERE estado='activo'";
if ($resultach2=mysqli_query($conexion,$sqlcuentach2)) {
    $rowcountch2=mysqli_num_rows($resultach2);
}

?>
