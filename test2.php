
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
                    <div class="col-md-12">
                        <div class="card">
                        <?php 
                            class Shoes
                            {
                                public $s;

                                public function getIntervalo()
                            {
                                $string = $this->s;
                                $arr1 = str_split($string);
                                $intervalo = 0;
                                $int2 = 0;
                                $count = 0;
                                $valor =  $arr1[0];
                                $valor2 = "";

                                for($i= 0; $i < sizeof($arr1); $i++){
                                    if($i > 0){
                 // L  L           L R
                                        if($valor == $arr1[$i]){
                                            $valor2 = $valor;
                                             $intervalo++;
                                            if($valor2 == $valor){
                                                $count++;
                                            }
                                            if( $intervalo == $int2){
                                                $count++;
                                            }
                                        }else{
                                            $int2++;
                                        }
                                }

          //L L
        
        //L R
                                $valor = $arr1[$i];
                            }

                            return $count;
                            }
                        }
  
 $shoes = new Shoes();
 $shoes->s = ' LLRLRLRLRLRLRR'; //1
 $total = $shoes->getIntervalo(); 
 echo "Prueba 1 <br>";
 print_r($total);

 $shoes->s = 'RLLLRRRLLR'; // 4
 $total = $shoes->getIntervalo(); 
 echo "<br>";
 echo "prueba 2 <br>";
 print_r($total);

 $shoes->s = 'RLRRLLRLRRLL'; // 4
 $total = $shoes->getIntervalo(); 
 echo "<br>";
 echo "prueba 3 <br>";
 print_r($total);

  
?>
                            
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
        

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    
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
