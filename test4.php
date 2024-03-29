
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../img/ico.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="estilos.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/estilos.css">

</head>
<body class="fondo2">
<div class="wrapper">
    <?php require("menuVertical.php");?>

    <div class="main-panel">
        <?php require("menuHorizontal.php");?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                    <div class="card clock">
                            <center>
                            <lavel> id,name,age,score\n </lavel>
                            <?php
                                    require("bd.php");
                                    $consulta = "SELECT * from personas";
                                    $resultado=$conexion->query($consulta);
                                    while($fila = $resultado->fetch_array()){
                                        echo "<td>".$fila['id'].",</td>";
                                        echo "<td>".$fila['name'].",</td>";
                                        if ($fila['age']==""){
                                           echo  $fila['age']="NULL,";
                                        }else{
                                            echo "<td>".$fila['age'].",</td>";
                                        }
                                        
                                        echo "<td>".$fila['score']."\n</td>"; 
                                    }
                                    ?>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card clock">
                            <center>
                            <lavel> id,name,age,score\n </lavel>
                            <?php
                                    
                                    $consulta2 = "SELECT * from personas where age != 'null'";
                                    $resultado2=$conexion->query($consulta2);
                                    while($fila2 = $resultado2->fetch_array()){
                                        echo "<td>".$fila2['id'].",</td>";
                                        echo "<td>".$fila2['name'].",</td>";
                                        echo "<td>".$fila2['age'].",</td>";
                                        echo "<td>".$fila2['score']."\n</td>"; 
                                    }
                                    ?>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card clock">
                            <center>
                            <lavel> header,header\n </lavel>
                            <?php
                                    
                                    /*$consulta3 = "SELECT c.header,c2.header from header c2
                                                 INNER JOIN consulta2 c on c2.fk_header=c.id";*/
                                    $consulta3 = "SELECT c.header,c2.header from header c2
                                                 INNER JOIN consulta2 c on c2.fk_header=c.id";
                                    $resultado3=$conexion->query($consulta3);
                                    while($fila3 = $resultado3->fetch_array()){

                                        
                                        if ($fila3[0]=="" && $fila3[1]=="" ){
                                           $fila3[0]="NULL";
                                           $fila3[1]="NULL";
                                         }
                                         echo $fila3[0].",";
                                         echo $fila3[1]."\n";
                                       
                                    }
                                    ?>
                            </center>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card clock">
                            <center>
                            <lavel> header,header\n </lavel>
                            <?php
                                    
                                    /*$consulta3 = "SELECT c.header,c2.header from header c2
                                                 INNER JOIN consulta2 c on c2.fk_header=c.id";*/
                                    $consulta4 = "SELECT c.header,c2.header from header c2
                                                 INNER JOIN consulta2 c on c2.fk_header=c.id 
                                                 where c2.header !='NULL' ";
                                    $resultado4=$conexion->query($consulta4);
                                    while($fila4 = $resultado4->fetch_array()){

                                         echo $fila4[0].",";
                                         echo $fila4[1]."\n";
                                       
                                    }
                                    $conexion->close();
                                    ?>
                            </center>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="clock.js"></script>
    <script src="../js/alertas.js" type="text/javascript"></script>
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
