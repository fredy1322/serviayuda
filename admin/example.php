<?php

require_once('db.php');

$fecha_inicial = new DateTime('01-04-2023');
$fecha_final = new DateTime('04-04-2023');
for($i = $fecha_inicial; $i <= $fecha_final; $i->modify('+1 day')){
  $res =  $i->format("Y-m-d");
    echo "<td>".$i->format("Y-m-d")."<td>";


$consulta = "SELECT  SUM(chat) as 'totalchat' FROM interacciones WHERE fecha = '$res' ";
$result = mysqli_query($conexion,$consulta);
$data=mysqli_fetch_array($result);
echo "<br><td>".$data['totalchat']."</td><br>";  }