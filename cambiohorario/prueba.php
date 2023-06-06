<?php

include('db.php');
include('session.php');

$lunes=$_POST['lunes'];
$martes=$_POST['martes'];
$miercoles=$_POST['miercoles'];
$jueves=$_POST['jueves'];
$viernes=$_POST['viernes'];
$sabado=$_POST['sabado'];


echo "Dias seleccionados";    
echo "<br>";
echo $lunes;
echo "<br>";
echo $martes;
echo "<br>";
echo $miercoles;
echo "<br>";
echo $jueves;
echo "<br>";
echo $viernes;
echo "<br>";
echo $sabado;