
<?php
date_default_timezone_set("America/Bogota");
header('Content-Type: text/html; charset=UTF-8');
//cambiar el conjunto de caracteres a utf8 


require_once('db.php');
session_start();
$desde2 = new DateTime($_POST['fecha1']);
$hasta2 = new DateTime($_POST['fecha2']);
$desde = $desde2->format('Y-m-d');
$hasta = $hasta2->format('Y-m-d');

// Consulta interacciones CHAT  entre fechas para un agente 
$consulta = "SELECT SUM(chat) as 'totalchat' FROM interacciones WHERE cedula >='0'  
AND DATE( fecha ) 
BETWEEN DATE( '$desde') AND DATE(  '$hasta' )";
$result = mysqli_query($conexion,$consulta);
$data=mysqli_fetch_array($result);
$cantidadchat = $data['totalchat'];

// Consulta interacciones WHATSAPP  entre fechas para un agente 
$consulta = "SELECT SUM(whatsapp) as 'totalwhatsapp' FROM interacciones WHERE cedula >='0'
AND DATE( fecha ) 
BETWEEN DATE( '$desde') AND DATE(  '$hasta' )";
$result = mysqli_query($conexion,$consulta);
$data=mysqli_fetch_array($result);
$cantidadwhatsapp = $data['totalwhatsapp'];

// fin consulta WHATSAPP

// Consulta interacciones LLAMADAS  entre fechas para un agente 
$consulta = "SELECT SUM(llamadas) as 'totalllamadas' FROM interacciones WHERE cedula >='0'
AND DATE( fecha ) 
BETWEEN DATE( '$desde') AND DATE(  '$hasta' )";
$result = mysqli_query($conexion,$consulta);
$data=mysqli_fetch_array($result);
$cantidadllamadas = $data['totalllamadas'];

// fin consulta WHATSAPP


if(isset($_POST['fecha1'])){  ?>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<link rel="stylesheet" href="/Login/Aplicativo/css/bootstrap.min.css"></script> 
<link rel="stylesheet" href="/Login/css/estilograficoagente.css">


<figure class="highcharts-figure">
  <div id="container"></div>
  <p class="highcharts-description">

  </p>
</figure>

<style>
    .highcharts-figure,
.highcharts-data-table table {
  min-width: 310px;
  max-width: 800px;
  margin: 1em auto;
}

#container {
  height: 400px;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
 </style>

 <script>
    // Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

// Create the chart
Highcharts.chart('container', {
  chart: {
    type: 'column'
  },
  title: {
    align: 'center',
    text: 'Cantidad de interacciones por rango de fechas'
  },
  subtitle: {
    align: 'left',
    text: '<br><br>'
  },
  accessibility: {
    announceNewData: {
      enabled: true
    }
  },
  xAxis: {
    type: 'category'
  },
  yAxis: {
    title: {
      text: 'Total interacciones'
    }

  },
  legend: {
    enabled: false
  },
  plotOptions: {
    series: {
      borderWidth: 0,
      dataLabels: {
        enabled: true,
        format: '{point.y:.0f}'
      }
    }
  },

  tooltip: {
    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b><br/>'
  },

  series: [
    {
      name: 'Interacciones',
      colorByPoint: true,
      data: [
        {
          name: 'Chat',
          y: <?php if(empty($cantidadchat)){echo "0";} else { echo $cantidadchat; } ?>,
          drilldown: 'Chat'
        },
        {
          name: 'Whatsapp',
          y: <?php if(empty($cantidadwhatsapp)){echo "0";} else { echo $cantidadwhatsapp; } ?>,
          drilldown: 'Whatsapp'
        },
        {
          name: 'Llamadas',
          y: <?php if(empty($cantidadllamadas)){echo "0";} else { echo $cantidadllamadas; } ?>,
          drilldown: 'Llamadas'
        }
       
      ]
    }
  ],
  drilldown: {
    breadcrumbs: {
      position: {
        align: 'right'
      }
    },
    series: [
      {
        name: 'Chrome',
        id: 'Chrome',
        data: [
          [
            'v65.0',
            0.1
          ],
          [
            'v64.0',
            1.3
          ],
          [
            'v63.0',
            53.02
          ],
          [
            'v62.0',
            1.4
          ],
          [
            'v61.0',
            0.88
          ],
          [
            'v60.0',
            0.56
          ],
          [
            'v59.0',
            0.45
          ],
          [
            'v58.0',
            0.49
          ],
          [
            'v57.0',
            0.32
          ],
          [
            'v56.0',
            0.29
          ],
          [
            'v55.0',
            0.79
          ],
          [
            'v54.0',
            0.18
          ],
          [
            'v51.0',
            0.13
          ],
          [
            'v49.0',
            2.16
          ],
          [
            'v48.0',
            0.13
          ],
          [
            'v47.0',
            0.11
          ],
          [
            'v43.0',
            0.17
          ],
          [
            'v29.0',
            0.26
          ]
        ]
      },
      {
        name: 'Firefox',
        id: 'Firefox',
        data: [
          [
            'v58.0',
            1.02
          ],
          [
            'v57.0',
            7.36
          ],
          [
            'v56.0',
            0.35
          ],
          [
            'v55.0',
            0.11
          ],
          [
            'v54.0',
            0.1
          ],
          [
            'v52.0',
            0.95
          ],
          [
            'v51.0',
            0.15
          ],
          [
            'v50.0',
            0.1
          ],
          [
            'v48.0',
            0.31
          ],
          [
            'v47.0',
            0.12
          ]
        ]
      },
      {
        name: 'Internet Explorer',
        id: 'Internet Explorer',
        data: [
          [
            'v11.0',
            6.2
          ],
          [
            'v10.0',
            0.29
          ],
          [
            'v9.0',
            0.27
          ],
          [
            'v8.0',
            0.47
          ]
        ]
      },
      {
        name: 'Safari',
        id: 'Safari',
        data: [
          [
            'v11.0',
            3.39
          ],
          [
            'v10.1',
            0.96
          ],
          [
            'v10.0',
            0.36
          ],
          [
            'v9.1',
            0.54
          ],
          [
            'v9.0',
            0.13
          ],
          [
            'v5.1',
            0.2
          ]
        ]
      },
      {
        name: 'Edge',
        id: 'Edge',
        data: [
          [
            'v16',
            2.6
          ],
          [
            'v15',
            0.92
          ],
          [
            'v14',
            0.4
          ],
          [
            'v13',
            0.1
          ]
        ]
      },
      {
        name: 'Opera',
        id: 'Opera',
        data: [
          [
            'v50.0',
            0.96
          ],
          [
            'v49.0',
            0.82
          ],
          [
            'v12.1',
            0.14
          ]
        ]
      }
    ]
  }
});
</script>
<div style="margin-left: 0px;" class="fixed"> <button class="excel" title="Descargar" onclick="location.href='desinter.php?desde=<?php echo $desde; ?>'"> Descargar en excel </div>
<table class="tab">
    <thead style="position: sticky !important;top: 0 !important;">
      <tr>
        <th rowspan="2" class="fila">Nombre</th>
        <th rowspan="2" class="fila">Cedula</th>
        <th rowspan="2" class="fila">Segmento</th>
        <?php
  $fecha_inicial = new DateTime($desde);
  $fecha_final = new DateTime($hasta);
  for($i = $fecha_inicial; $i <= $fecha_final; $i->modify('+1 day')){
    $res =  $i->format("d-m-y");
      $i->format("d-m-y");

      echo "<th colspan='3' class='col dos'><p align='center'>".$res."</p></th>";
 } echo "</tr>"; 
echo "<tr>";

 $fecha_inicial = new DateTime($desde);
 $fecha_final = new DateTime($hasta);
 for($i = $fecha_inicial; $i <= $fecha_final; $i->modify('+1 day')){
 echo "<th class='colc'><p align='center'>Chat</p></th>";
 echo "<th class='colw'><p align='center'>Whatsapp</p></th>";
 echo "<th class='coll'><p align='center'>Llamadas</p></th>";
} echo "</tr>"; 
echo "</thead>";
echo "<tbody";
echo "<tr>"; 

$consultanombre = "SELECT DISTINCT nombre , cedula , segmento FROM interacciones  WHERE cedula > '0' AND DATE( fecha ) 
BETWEEN DATE('$desde') AND DATE('$hasta')";
$resultadonmbr = mysqli_query($conexion, $consultanombre); 
while ($columna = mysqli_fetch_array( $resultadonmbr )) { 
$cedula = $columna['cedula'];
echo "<td ><p align='left'>".$columna['nombre']."</td>";
echo "<td ><p align='left'>".$cedula."</td>";
echo "<td ><p align='left'>".$columna['segmento']."</td>";


$fecha_inicial = new DateTime($desde);
$fecha_final = new DateTime($hasta);
for($i = $fecha_inicial; $i <= $fecha_final; $i->modify('+1 day')){
  $res =  $i->format("Y-m-d");
    $i->format("Y-m-d");
    $consulta = "SELECT SUM(chat) as 'totalchat' FROM interacciones WHERE cedula = '$cedula' AND fecha = '$res'";
    $result = mysqli_query($conexion,$consulta);
    $data=mysqli_fetch_array($result);
    echo "<td><p align='center'>".$data['totalchat']."</p></td>";   

    $i->format("Y-m-d");
    $consultaw = "SELECT SUM(whatsapp) as 'totalwhatsapp' FROM interacciones WHERE cedula = '$cedula' AND fecha = '$res'";
    $resultw = mysqli_query($conexion,$consultaw);
    $dataw=mysqli_fetch_array($resultw);
    echo "<td><p align='center'>".$dataw['totalwhatsapp']."</p></td>";  

        $consultal = "SELECT SUM(llamadas) as 'totalllamadas' FROM interacciones  WHERE cedula = '$cedula' AND fecha = '$res'";
        $resultl = mysqli_query($conexion,$consultal);
        $datal=mysqli_fetch_array($resultl);
        echo "<td><p align='center'>".$datal['totalllamadas']."</p></td>";  }
        echo "<tr class='col2'>";
       }


  

?>
    </thead>
    <tbody>   
    </table>
<style>

.col:nth-child(-n + 3) {
        margin-bottom: 1px;

    }
    
    .col:nth-child(even) {
        background-color:  gray;
  
    }

  

.dos {
  background-color:   rgb(51, 153, 97);
  color: white;
}

.col2:nth-child(even) {
  background-color:  #0000000f;
  color: black;
 }

 .colc:nth-child(1n) {
  background-color: gray;
  color: white;
}
.colc:nth-child(2n) {
  background-color: rgb(51, 153, 97);
}

.colw:nth-child(1n) {
  background-color: rgb(51, 153, 97);
  color: white;
}
.colw:nth-child(2n) {
  background-color: gray;
}
.coll:nth-child(1n) {
  background-color: gray;
  color: white;
}
.coll:nth-child(2n) {
  background-color: rgb(51, 153, 97);
}

td, th {
            font-size: auto;
        }

.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, .05) }

.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, .05)
}

.table-bordered {
    border: 1px solid #dee2e6
}
.table-bordered td,
.table-bordered th {
    border: 1px solid #dee2e6
}
.table-bordered thead td,
.table-bordered thead th {
    border-bottom-width: 2px
}
.table-dark.table-bordered {
    border: 0
}
    .table-responsive-sm>.table-bordered {
        border: 0
    }
    .table-responsive-md>.table-bordered {
        border: 0
    }
    .table-responsive-lg>.table-bordered {
        border: 0
    }    .table-responsive-xl>.table-bordered {
        border: 0
    }
.table-responsive>.table-bordered {
    border: 0
}
    .table-bordered td,
    .table-bordered th {
        border: 1px solid #dee2e6!important
    }
.table {
  width: 90%;
    margin-bottom: 1rem;
    color: #212529;
    margin: 5%;
    height: auto;
    z-index: 1000;
    overflow: hidden !important;
}
.table td,
.table th {
    padding: .3rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6
}
.table tbody+tbody {
    border-top: 2px solid #dee2e6
    
}
.table-sm td,
.table-sm th {
    padding: 3rem

}
.table-bordered {
    border: 1px solid #dee2e6
}
.table-bordered td,
.table-bordered th {
    border: 1px solid #dee2e6
}
.table-bordered thead td,
.table-bordered thead th {
    border-bottom-width: 2px
}
.table-borderless tbody+tbody,
.table-borderless td,
.table-borderless th,
.table-borderless thead th {
    border: 0
}
.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 0, 0, .05)
}
.table-hover tbody tr:hover {
    color: #212529;
    background-color: rgba(0, 0, 0, .075)
}
.table-primary,
.table-primary>td,
.table-primary>th {
    background-color: #b8daff
}
.table-primary tbody+tbody,
.table-primary td,
.table-primary th,
.table-primary thead th {
    border-color: #7abaff
}
.table-hover .table-primary:hover {
    background-color: #9fcdff
}
.table-hover .table-primary:hover>td,
.table-hover .table-primary:hover>th {
    background-color: #9fcdff
}
.table-secondary,
.table-secondary>td,
.table-secondary>th {
    background-color: #d6d8db
}
.table-secondary tbody+tbody,
.table-secondary td,
.table-secondary th,
.table-secondary thead th {
    border-color: #b3b7bb
}
.table-hover .table-secondary:hover {
    background-color: #c8cbcf
}
.table-hover .table-secondary:hover>td,
.table-hover .table-secondary:hover>th {
    background-color: #c8cbcf
}
.table-success,
.table-success>td,
.table-success>th {
    background-color: #c3e6cb
}
.table-success tbody+tbody,
.table-success td,
.table-success th,
.table-success thead th {
    border-color: #8fd19e
}
.table-hover .table-success:hover {
    background-color: #b1dfbb
}
.table-hover .table-success:hover>td,
.table-hover .table-success:hover>th {
    background-color: #b1dfbb
}
.table-info,
.table-info>td,
.table-info>th {
    background-color: #bee5eb
}
.table-info tbody+tbody,
.table-info td,
.table-info th,
.table-info thead th {
    border-color: #86cfda
}
.table-hover .table-info:hover {
    background-color: #abdde5
}
.table-hover .table-info:hover>td,
.table-hover .table-info:hover>th {
    background-color: #abdde5
}
.table-warning,
.table-warning>td,
.table-warning>th {
    background-color: #ffeeba
}
.table-warning tbody+tbody,
.table-warning td,
.table-warning th,
.table-warning thead th {
    border-color: #ffdf7e
}
.table-hover .table-warning:hover {
    background-color: #ffe8a1
}
.table-hover .table-warning:hover>td,
.table-hover .table-warning:hover>th {
    background-color: #ffe8a1
}
.table-danger,
.table-danger>td,
.table-danger>th {
    background-color: #f5c6cb
}
.table-danger tbody+tbody,
.table-danger td,
.table-danger th,
.table-danger thead th {
    border-color: #ed969e
}
.table-hover .table-danger:hover {
    background-color: #f1b0b7
}
.table-hover .table-danger:hover>td,
.table-hover .table-danger:hover>th {
    background-color: #f1b0b7
}
.table-light,
.table-light>td,
.table-light>th {
    background-color: #fdfdfe
}
.table-light tbody+tbody,
.table-light td,
.table-light th,
.table-light thead th {
    border-color: #fbfcfc
}
.table-hover .table-light:hover {
    background-color: #ececf6
}
.table-hover .table-light:hover>td,
.table-hover .table-light:hover>th {
    background-color: #ececf6
}
.table-dark,
.table-dark>td,
.table-dark>th {
    background-color: #c6c8ca
}
.table-dark tbody+tbody,
.table-dark td,
.table-dark th,
.table-dark thead th {
    border-color: #95999c
}
.table-hover .table-dark:hover {
    background-color: #b9bbbe
}
.table-hover .table-dark:hover>td,
.table-hover .table-dark:hover>th {
    background-color: #b9bbbe
}
.table-active,
.table-active>td,
.table-active>th {
    background-color: rgba(0, 0, 0, .075)
}
.table-hover .table-active:hover {
    background-color: rgba(0, 0, 0, .075)
}
.table-hover .table-active:hover>td,
.table-hover .table-active:hover>th {
    background-color: rgba(0, 0, 0, .075)
}
.table .thead-dark th {
    color: #fff;
    background-color: #343a40;
    border-color: #454d55
}
.table .thead-light th {
    color: #495057;
    background-color: #e9ecef;
    border-color: #dee2e6
}
.table-dark {
    color: #fff;
    background-color: #343a40
}
.table-dark td,
.table-dark th,
.table-dark thead th {
    border-color: #454d55
}
.table-dark.table-bordered {
    border: 0
}
.table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, .05)
}
.table-dark.table-hover tbody tr:hover {
    color: #fff;
    background-color: rgba(255, 255, 255, .075)
}
@media (max-width: 575.98px) {
    .table-responsive-sm {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }
    .table-responsive-sm>.table-bordered {
        border: 0
    }
}
@media (max-width: 767.98px) {
    .table-responsive-md {
        display: block;
        width: 100%;
        min-height: 200%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }
    .table-responsive-md>.table-bordered {
        border: 0
    }
}
@media (max-width: 991.98px) {
    .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }
    .table-responsive-lg>.table-bordered {
        border: 0
    }
}
@media (max-width: 1199.98px) {
    .table-responsive-xl {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch
    }
    .table-responsive-xl>.table-bordered {
        border: 0
    }
}
.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;

    -webkit-overflow-scrolling: touch
}
.table-responsive>.table-bordered {
    border: 0
}



table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

.fila {
background-color:  rgb(51, 153, 97);
color: #fff;
font-size: 14px;
}


</style>



<?php








}




?>


