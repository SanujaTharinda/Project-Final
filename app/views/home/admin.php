<!DOCTYPE html>
<html>
    <head>

        <title>Admin Homepage</title>
        
        <!--google fonts-->
        <link rel="stylesheet" href="https://fonts.google.com/specimen/Roboto+Condensed?selection.family=Roboto+Condensed:300,300i,400,400i,700,700i">

        <!--font awesome-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!--bootstrap CSS-->
        <link rel="stylesheet" href="<?php echo PUBLICROOT; ?>css/Bootstrap/bootstrap.min.css">

        <!--Animate CSS-->
        <link rel="stylesheet" href="<?php echo PUBLICROOT; ?>css/animate/animate.css">
        
        <!--style CSS-->
        <link rel="stylesheet" href="<?php echo PUBLICROOT; ?>css/style.css">

        <!-- responsive CSS -->
        <link rel="stylesheet" href="<?php echo PUBLICROOT; ?>css/responsive.css">

        

         <!-- CSS Chat Box Style Sheet -->
    <link rel="stylesheet" href="<?php echo PUBLICROOT?>css/chat-box-styles.css"/>
    

    <!-- Font Awesome -->

    <script src="https://kit.fontawesome.com/8fec142aee.js" crossorigin="anonymous"></script>


    </head>

    <body class="index"  data-spy="scroll" data-target=".navbar-fixed-top" data-offset="65">
        
            <!--NAVIGATION BAR-->
            <?php require_once(APPROOT."/views/navbar/navbar.php")?>
           
            
        
            <!--HOME section-->
            <section id="home">

                <div id="home-cover" class="wow fadeIn" data-wow-duration=".7s" data-wow-delay=".5s">

                    <div id="home-content-box">

                        <div id="home-content-box-inner">

                            <div class="container-fluid"> 
                                <div class="row wow fadeInUp " data-wow-duration=".7s" data-wow-delay=".5s">
                                
                                <div class="col-md-4">
                                    <div class="Item">
                                        <div class="Item-icon">
                                            <i class="fa fa-user-circle fa-4x"></i>
                                        </div>
                                        
                                        <div class="Item-title">
                                            <a class="btn btn-lg btn-general btn-1" href="index.php" role="button">Main User Details</a>
                                        </div>

                                    
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="Item">
                                        <div class="Item-icon">
                                            <i class="fa fa-address-book fa-4x"></i>
                                        </div>
                                        
                                        <div class="Item-title">
                                            <a class="btn btn-lg btn-general btn-2" href="index.php" role="button">Employee User Details</a></h3>
                                        </div>

                                    
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="Item">
                                        <div class="Item-icon">
                                            <i class="fa fa-group fa-4x"></i>
                                        </div>
                                        
                                        <div class="Item-title">
                                            <h3><a class="btn btn-lg btn-general btn-3" href=<?php echo MINOR_STAFF_DETAILS_CLICK ?>>Minor Staff Details</a></h3>
                                        </div>

                                        
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="Item">
                                        <div class="Item-icon">
                                            <i class="fa fa-check-square-o fa-4x"></i>
                                        </div>
                                        
                                        <div class="Item-title">
                                            <h3><a class="btn btn-lg btn-general btn-4" href="<?php echo ATTENDANCE_CLICK;?>" role="button">Attendance</a></h3>
                                        </div>

                                        
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="Item">
                                        <div class="Item-icon">
                                            <i class="fa fa-sitemap fa-4x"></i>
                                        </div>
                                        
                                        <div class="Item-title">
                                            <h3><a class="btn btn-lg btn-general btn-5" href="index.php" role="button">Duty Arrangement</a></h3>
                                        </div>

                                        
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="Item">
                                        <div class="Item-icon">
                                            <i class="fa fa-money fa-4x"></i>
                                        </div>
                                        
                                        <div class="Item-title">
                                            <h3><a class="btn btn-lg btn-general btn-6" href="index.php" role="button">Salary Manangement</a></h3>
                                        </div>

                                        
                                    </div>
                                </div>
                                
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </section>

                
            
            
            <!--jQuery-->
            <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

            <!--bootstrap JS-->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            <!--WOW JS-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous"></script>

            <!-- counter -->
            <script src="https://cdn.jsdelivr.net/npm/jquery-waypoints@2.0.5/waypoints.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>

            <!-- easing -->
            <script src="https://cdn.jsdelivr.net/npm/jquery.easing@1.4.1/jquery.easing.js"></script>
            
            <!--custom JS-->    
            <script src="<?php echo PUBLICROOT; ?>js/custom.js"></script>

            <!-- Messaging JS -->
            <script src="<?php echo PUBLICROOT; ?>js/messaging.js"></script>
            
    <script src="main.js"></script>



            
        
    </body>

    

</html>