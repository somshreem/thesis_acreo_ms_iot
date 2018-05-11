
<?php
    
    
    if(isset($_POST['submit'])){
        if(!empty($_POST['check1']) || !empty($_POST['check2']) || !empty($_POST['check3']) || !empty($_POST['check4']) || !empty($_POST['check5']) || !empty($_POST['check6']) || !empty($_POST['check7']) || !empty($_POST['check8']) || !empty($_POST['check9']) || !empty($_POST['check10']) || !empty($_POST['check11']) || !empty($_POST['check12']) || !empty($_POST['check13']) || !empty($_POST['check14']) || !empty($_POST['check15']) || !empty($_POST['check16']) || !empty($_POST['check17']) || !empty($_POST['check18']) || !empty($_POST['check19']) || !empty($_POST['check20']) || !empty($_POST['check21']) || !empty($_POST['check22']) || !empty($_POST['check23']) || !empty($_POST['check24']) || !empty($_POST['check25']) || !empty($_POST['check26']) || !empty($_POST['check27']) || !empty($_POST['check28']) || !empty($_POST['check29']) || !empty($_POST['check30']) || !empty($_POST['check31']) || !empty($_POST['check32']) || !empty($_POST['check33']) || !empty($_POST['check34']) || !empty($_POST['check35']) || !empty($_POST['check36']) || !empty($_POST['check37']) || !empty($_POST['check38']) || !empty($_POST['check39']) || !empty($_POST['check40']) || !empty($_POST['check41']) || !empty($_POST['check42']) || !empty($_POST['check43']) || !empty($_POST['check44']) || !empty($_POST['check45']) ) {
            
            
            // Counting if checkbox checked ---> Yes: count=1, no: count=0.
            
            $var1 = count($_POST['check1']);
            $var2 = count($_POST['check2']);
            $var3 = count($_POST['check3']);
            $var4 = count($_POST['check4']);
            $var5 = count($_POST['check5']);
            $var6 = count($_POST['check6']);
            $var7 = count($_POST['check7']);
            $var8 = count($_POST['check8']);
            $var9 = count($_POST['check9']);
            $var10 = count($_POST['check10']);
            $var11 = count($_POST['check11']);
            $var12 = count($_POST['check12']);
            $var13 = count($_POST['check13']);
            $var14 = count($_POST['check14']);
            $var15 = count($_POST['check15']);
            $var16 = count($_POST['check16']);
            $var17 = count($_POST['check17']);
            $var18 = count($_POST['check18']);
            $var19 = count($_POST['check19']);
            $var20 = count($_POST['check20']);
            $var21 = count($_POST['check21']);
            $var22 = count($_POST['check22']);
            $var23 = count($_POST['check23']);
            $var24 = count($_POST['check24']);
            $var25 = count($_POST['check25']);
            $var26 = count($_POST['check26']);
            $var27 = count($_POST['check27']);
            $var28 = count($_POST['check28']);
            $var29 = count($_POST['check29']);
            $var30 = count($_POST['check30']);
            $var31 = count($_POST['check31']);
            $var32 = count($_POST['check32']);
            $var33 = count($_POST['check33']);
            $var34 = count($_POST['check34']);
            $var35 = count($_POST['check35']);
            $var36 = count($_POST['check36']);
            $var37 = count($_POST['check37']);
            $var38 = count($_POST['check38']);
            $var39 = count($_POST['check39']);
            $var40 = count($_POST['check40']);
            $var41 = count($_POST['check41']);
            $var42 = count($_POST['check42']);
            $var43 = count($_POST['check43']);
            $var44 = count($_POST['check44']);
            $var45 = count($_POST['check45']);
            
            
            
            
            //just random calculation to check for validity to open connection to database
            
            
            $totalcount = $var1 + $var2 + $var3 + $var4 + $var5 + $var6 + $var7 + $var8 + $var9 + $var10 + $var11 + $var12 + $var13 + $var14 + $var15 + $var16 + $var17 + $var18 + $var19 + $var20 + $var21 + $var22 + $var23 + $var24 + $var25 + $var26 + $var27 + $var28 + $var29 + $var30 + $var31 + $var32 + $var33 + $var34 + $var35 + $var36 + $var37 + $var38 + $var39 + $var40 + $var41 + $var42 + $var43 + $var44 + $var45;
            
            if($totalcount>0)
            {
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "iot_platforms";
                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                //else { echo "Connected successfully <br/>"; }
                
                
                // so that we can ignore the fields which were not checked in the query : below :
                
                if($var35 == 1)
                $str1 = "data_reliability=1 AND ";
                else $str1 = "";
                
                if($var36 == 1)
                $str2 = "network_security=1 AND ";
                else $str2 = "";
                
                if($var37 == 1)
                $str3 = "data_visualisation=1 AND ";
                else $str3 = "";
                
                if($var38 == 1)
                $str4 = "data_storage=1 AND ";
                else $str4 = "";
                
                if($var39 == 1)
                $str5 = "interoperability=1 AND ";
                else $str5 = "";
                
                if($var40 == 1)
                $str6 = "device_management=1 AND ";
                else $str6 = "";
                
                if($var41 == 1)
                $str7 = "context_awareness=1 AND ";
                else $str7 = "";
                
                if($var42 == 1)
                $str8 = "scalability=1 AND ";
                else $str8 = "";
                
                if($var43 == 1)
                $str9 = "security_privacy_integrity=1 AND ";
                else $str9 = "";
                
                if($var44 == 1)
                $str10 = "open_source=1 AND ";
                else $str10 = "";
                
                if($var45 == 1)
                $str11 = "document_availability=1 AND ";
                else $str11 = "";
                
                
                //sql query  : var1 var for checkbox type column
                
                $sqlstd="SELECT name_of_platform FROM platforms_details WHERE (business_consumer=$var1 OR business_automotive=$var2 OR business_retailbank=$var3 OR business_environment=$var4 OR business_infrastructure=$var5 OR business_utilities=$var6 OR business_health=$var7 OR business_smartcities=$var8 OR business_processindustry=$var9 OR business_agriculture=$var10) AND (software_platform=$var11 OR hardware_also=$var12) AND (cost_high=$var13 OR cost_medium=$var14 OR cost_low=$var15) AND (no_devices_high=$var16 OR no_devices_medium=$var17 OR no_devices_low=$var18) AND (size_hardware_small=$var19 OR size_hardware_medium=$var20 OR size_hardware_large=$var21) AND (range_area_small=$var22 OR range_area_medium=$var23 OR range_area_large=$var24) AND (commproto_bluetooth=$var25 OR commproto_ble=$var26 OR commproto_gsm=$var27 OR commproto_3g4g=$var28 OR commproto_zigbee=$var29 OR commproto_thread=$var30 OR commproto_zwave=$var31 OR commproto_lpwan=$var32 OR commproto_wifi=$var33 OR commproto_ethernet=$var34) AND ";
                
                $sqltmp=$sqlstd.$str1.$str2.$str3.$str4.$str5.$str6.$str7.$str8.$str9.$str10.$str11;
                
                $sql=chop($sqltmp,"AND ");
                
                /*
                 $result = $conn->query($sql);
                 
                 if ($result->num_rows > 0) {
                 // output data of each row
                 while($row = $result->fetch_assoc()) {
                 echo "IoT Platform: " . $row["name_of_platform"]. " ::: <br/>";
                 }
                 } else {
                 echo "0 results";
                 }
                 */
                
            }
            
            
        }
        /*     else{
         echo "<b>Please Select Atleast One Option.</b>";
         } */
    }
?>




<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <meta charset="utf-8">
            <meta name="robots" content="all,follow">
                <meta name="googlebot" content="index,follow,snippet,archive">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                        <meta name="description" content="IoT Industry Platforms">
                            <meta name="author" content="somshree_mukherjee">
                                <meta name="keywords" content="">
                                    
                                    <title>
                                        IoT Industry Platforms
                                    </title>
                                    
                                    <meta name="keywords" content="">
                                        
                                        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
                                            
                                            <!-- styles -->
                                            <link href="css/font-awesome.css" rel="stylesheet">
                                            <link href="css/bootstrap.min.css" rel="stylesheet">
                                            <link href="css/animate.min.css" rel="stylesheet">
                                            <link href="css/owl.carousel.css" rel="stylesheet">
                                            <link href="css/owl.theme.css" rel="stylesheet">
                                            <link href="css/bootstrap.min.css" rel="stylesheet" />
                                            <link href="css/bootstrap-slider.css" rel="stylesheet" />
                                            
                                            
                                            
                                            <!-- theme stylesheet -->
                                            <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">
                                            
                                            <!-- your stylesheet with modifications -->
                                            <link href="css/custom.css" rel="stylesheet">
                                            
                                            <script src="js/respond.min.js"></script>
                                            
                                            <link rel="shortcut icon" href="favicon.png">
                                            
                                            
                                            <style>
                                            #ex1Slider.slider-selection {
                                            background: #BABABA;
                                            }
                                            </style>
                                            <script src="js/jquery-1.11.0.js"></script>
                                            <script src="js/bootstrap-slider.js"></script>
                                            <script src="js/bootstrap.min.js"></script>
                                            
                                            <script type='text/javascript'>
                                            $(document).ready(function () {
                                            $('#ex1Slider').slider({});
                                            });
                                            </script>
                                            
                                            
                                            
                                            </head>
                                            
                                            <body>
                                            
                                            
                                            <!-- *** NAVBAR ***
                                            _________________________________________________________ -->
                                            
                                            <div class="navbar navbar-default yamm" role="navigation" id="navbar">
                                            <div class="container">
                                            <div class="navbar-header">
                                            
                                            <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                                            <img src="img/logo.png" alt="Acreo logo" class="hidden-xs">
                                            <img src="img/logo-small.png" alt="Acreo logo" class="visible-xs"><span class="sr-only">Acreo - go to homepage</span>
                                            </a>
                                            <div class="navbar-buttons">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                                            <span class="sr-only">Toggle navigation</span>
                                            <i class="fa fa-align-justify"></i>
                                            </button>
                                            
                                            </div>
                                            </div>
                                            <!--/.navbar-header -->
                                            
                                            <div class="navbar-collapse collapse" id="navigation">
                                            
                                            <ul class="nav navbar-nav navbar-left">
                                            <li class="active"><a href="index.html">Home</a>
                                            </li>
                                            <li class="hover"><a href="faq.html">FAQ</a>
                                            </li>
                                            <li class="hover"><a href="contact.html">Contact</a>
                                            </li>
                                            
                                            </ul>
                                            
                                            </div>
                                            
                                            
                                            </div>
                                            <!-- /.container -->
                                            </div>
                                            <!-- /#navbar -->
                                            
                                            <!-- *** NAVBAR END *** -->
                                            
                                            <!--
                                            _________________________________________________________ -->
                                            
                                            
                                            <div id="all">
                                            
                                            <div id="content">
                                            <div class="container">
                                            
                                            
                                            
                                            <!-- *** FILTERS ***
                                            _________________________________________________________ -->
                                            
                                            
                                            
                                            <!-- ***************************** form starts **************************** -->
                                            
                                            <form action="index.php" method="post">
                                            
                                            
                                            <!-- ***************************** panel 1 starts **************************** -->
                                            
                                            <div class="col-md-12">
                                            
                                            <div class="panel panel-default sidebar-menu">
                                            
                                            
                                            <div class="panel-heading">
                                            <h3 class="panel-title">Business Sector </h3>
                                            </div>
                                            
                                            
                                            <div class="panel-body">
                                            
                                            
                                            
                                            <div class="form-group">
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check1[]" value="Consumer Electronics"><label>Consumer Electronics</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check2[]" value="Automotives"><label>Automotives</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check3[]" value="Retail/Banking"><label>Retail/Banking</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check4[]" value="Environment"><label>Environment</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check5[]" value="Infrastructure"><label>Infrastructure</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check6[]" value="Utilities"><label>Utilities</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check7[]" value="Health"><label>Health</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check8[]" value="Smart Cities"><label>Smart Cities</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check9[]" value="Process Industry"><label>Process Industry</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check10[]" value="Agriculture"><label>Agriculture</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check100[]" value="Other"><label>Other</label>
                                            </label>
                                            </div> <!--form group -->

                                            </div> <!-- panelbody1 -->
                                            </div> <!-- panel default sidebar menu 1 -->
                                            </div> <!-- col-md-12 1st -->
                                            
                                            <!-- ***************************** panel 1 ends **************************** -->
                                            
                                            <!-- ***************************** panel 2 starts **************************** -->
                                            
                                            <div class="col-md-4">
                                            <div class="panel panel-default sidebar-menu">
                                            
                                            <div class="panel-heading">
                                            <h3 class="panel-title">Objective Requirements </h3>
                                            </div>
                                            
                                            
                                            
                                            <div class="panel-body">
                                            
                                            
                                            
                                            
                                            Hardware / Software :
                                            
                                            <div class="form-group">
                                            <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="check11[]" value="Software Platform"><label>Software Platform</label>
                                            </label>
                                            </div>
                                            <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="check12[]" value="Hardware also"><label>Hardware also</label>
                                            </label>
                                            </div>
                                            </div>
                                            
                                            
                                            Price (SEK) :
                                            
                                            <div class="form-group">
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check13[]" value="High"><label>High</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check14[]" value="Medium"><label>Medium</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check15[]" value="Low"><label>Low</label>
                                            </label>
                                            </div>
                                            
                                            
                                            
                                            Number of Connected Devices :
                                            
                                            <div class="form-group">
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check16[]" value="High"><label>High</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check17[]" value="Medium"><label>Medium</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check18[]" value="Low"><label>Low</label>
                                            </label>
                                            </div>
                                            
                                            
                                            Size of Hardware :
                                            
                                            <div class="form-group">
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check19[]" value="Small"><label>Small</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check20[]" value="Medium"><label>Medium</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check21[]" value="Large"><label>Large</label>
                                            </label>
                                            </div>
                                            
                                            
                                            Size of Focus Area :
                                            
                                            <div class="form-group">
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check22[]" value="Small"><label>Small</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check23[]" value="Medium"><label>Medium</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check24[]" value="Large"><label>Large</label>
                                            </label>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            Communication Protocol :
                                            
                                            <div class="form-group">
                                            <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="check25[]" value="Bluetooth"><label>Bluetooth</label>
                                            </label>
                                            </div>
                                            <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="check26[]" value="Bluetooth Low Energy"><label>Bluetooth Low Energy</label>
                                            </label>
                                            </div>
                                            <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="check27[]" value="GSM"><label>GSM</label>
                                            </label>
                                            </div>
                                            <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="check28[]" value="3G/4G"><label>3G/4G</label>
                                            </label>
                                            </div>
                                            <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="check29[]" value="Zigbee"><label>Zigbee</label>
                                            </label>
                                            </div>
                                            <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="check30[]" value="Thread"><label>Thread</label>
                                            </label>
                                            </div>
                                            <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="check31[]" value="Z-wave"><label>Z-wave</label>
                                            </label>
                                            </div>
                                            <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="check32[]" value="LPWAN (LoRa / SigFox)"><label>LPWAN (LoRa / SigFox)</label>
                                            </label>
                                            </div>
                                            <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="check33[]" value="Wifi"><label>Wifi</label>
                                            </label>
                                            </div>
                                            <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="check34[]" value="Ethernet"><label>Ethernet</label>
                                            </label>
                                            </div>
                                            <div class="checkbox">
                                            <label>
                                            <input type="checkbox" name="check344[]" value="Other"><label>Other</label>
                                            </label>
                                            </div>
                                            </div>



                                            
                                            </div> <!-- panelbody2 -->
                                            </div> <!-- panel default sidebar menu 2 -->
                                            </div> <!-- col-md-6 1st -->
                                            
                                            <!-- ***************************** panel 2 ends **************************** -->
                                            
                                            <!-- ***************************** panel 3 starts **************************** -->
                                            
                                            <div class="col-md-8">
                                            <div class="panel panel-default sidebar-menu">
                                            
                                            <div class="panel-heading">
                                            <h3 class="panel-title">Functional Requirements </h3>
                                            </div>
                                            
                                            
                                            
                                            <div class="panel-body">
                                            
                                            
                                            <div class="form-group">
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check35[]" value="Yes"><label>Data Reliability</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check36[]" value="Yes"><label>Network Security</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check37[]" value="Yes"><label>Data Visualisation</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check38[]" value="Yes"><label>Data Storage</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check39[]" value="Yes"><label>Interoperability</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check40[]" value="Yes"><label>Device Management</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check41[]" value="Yes"><label>Context Awareness</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check42[]" value="Yes"><label>Scalability</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check43[]" value="Yes"><label>Security Privacy Integrity</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check44[]" value="Yes"><label>Open Source</label>
                                            </label>
                                            <label class="checkbox-inline">
                                            <input type="checkbox" name="check45[]" value="Yes"><label>Documentation Availability</label>
                                            </label>
                                            </div> <!--form group -->
                                            
                                            
                                            
                                            
                                            
                                            </div> <!-- panel 3 body -->
                                            
                                            </div> <!-- panel side bar menu -->
                                            
                                            </div> <!-- /.col-md-9 -->
                                            
                                            
                                            <!-- ***************************** panel 3 ends **************************** -->
                                            
                                            
                                            <!-- ***************************** button panel starts **************************** -->
                                            
                                            <div class="col-md-8">
                                            
                                            
                                            
                                            <input type="submit" name="submit" class="btn btn-primary btn-lg pull-right" Value="Submit"/>
                                            
                                            
                                            
                                            <a class="btn btn-lg btn-danger pull-right" href="index.php"><i class="fa fa-times-circle"></i> Reset All</a>
                                            
                                            
                                            
                                            </div>
                                            
                                            <!-- ***************************** button panel ends **************************** -->
                                            
                                            
                                            
                                            </form>
                                            
                                            <!-- ***************************** form ends **************************** -->
                                            
                                            <!-- ***************************** Output here **************************** -->
                                            
                                            <div class="col-md-8">
                                            <div class="panel panel-default sidebar-menu">
                                            
                                            <div class="panel-heading">
                                            <h3 class="panel-title">Search Results </h3>
                                            </div>
                                            
                                            <div class="panel-body">
                                            
                                            
                                            
                                            
                                            <?php
                                            
                                            $result = $conn->query($sql);
                                            
                                            if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                            echo $row["name_of_platform"]. " <br/>";
                                            }
                                            } else {
                                            echo "0 results";
                                            }
                                            
                                            
                                            ?>
                                            
                                            
                                            </div>
                                            </div>
                                            </div>
                                            
                                            
                                            <!-- ***************************** output ends **************************** -->
                                            
                                            
                                            </div> <!-- /.container -->
                                            </div> <!-- /#content -->
                                            
                                            
                                            
                                            
                                            
                                            <!-- *** COPYRIGHT ***
                                            _________________________________________________________ -->
                                            <div id="copyright">
                                            <div class="container">
                                            <div class="col-md-6">
                                            <p class="pull-left">© 2016 somshree@kth.se</p>
                                            
                                            </div>
                                            <div class="col-md-6">
                                            <p class="pull-right">Template by <a href="http://bootstrapious.com/e-commerce-templates">Bootstrapious</a> with support from <a href="https://kakusei.cz">Kakusei</a>
                                            <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :) -->
                                            </p>
                                            </div>
                                            </div>
                                            </div>
                                            <!-- *** COPYRIGHT END *** -->
                                            
                                            
                                            
                                            </div>
                                            <!-- /#all -->
                                            
                                            
                                            
                                            
                                            <!-- *** SCRIPTS TO INCLUDE ***
                                            _________________________________________________________ -->
                                            <script src="js/jquery-1.11.0.min.js"></script>
                                            <script src="js/bootstrap.min.js"></script>
                                            <script src="js/jquery.cookie.js"></script>
                                            <script src="js/waypoints.min.js"></script>
                                            <script src="js/modernizr.js"></script>
                                            <script src="js/bootstrap-hover-dropdown.js"></script>
                                            <script src="js/owl.carousel.min.js"></script>
                                            <script src="js/front.js"></script>
                                            <script src="js/jquery-1.11.0.js"></script>
                                            <script src="js/bootstrap-slider.js"></script>
                                            <script src="js/bootstrap.min.js"></script>
                                            
                                            
                                            </body>
                                            
                                            </html>
