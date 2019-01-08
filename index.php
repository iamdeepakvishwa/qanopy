<?php
session_start() ;
$show_modal = false;
//$msg ="" ;
if(isset($_SESSION['modal']))
{
  if ($_SESSION['modal'] == 1)
  {
    $show_modal = 1;
    //$msg = "Thank You! We will get back to you in 24 hours" ;
    //echo "<script>$('#myModal1').modal('show')</script>";
  }

  if ($_SESSION['modal'] == 0)
  {
    $show_modal = -1;
    //$msg = "Request Not Sent! Try Again." ;
    //echo "<script>$('#myModal2').modal('show')</script>";
  }
}
unset($_SESSION['modal']) ;

?>
<!DOCTYPE html>
<html lang="en-US">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="qanopy impex pvt. ltd">
    <meta name="author" content="DrawfStar Network Productions">
    <meta name="google-site-verification" content="XApKl37nYniOE1udP6oQtrb9lX8OKZouGMb9d9CTcTE" />

    <title>Qanopy :: Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
  	<link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#mastt">Qanopy Impex Pvt. Ltd.</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pages/gift.html">Gift Items</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pages/packaging.html">Packaging</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="pages/display.html">Display Station</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- <div id="msgdiv">
        <?php echo '<h2 id="msg">'.$msg.'</h2>' ;?>
      </div> -->
    </nav>
  <!-- <div id="loader">
    <img src="./img/qanopy.jpg" alt="loading">
  </div> -->
  <!-- <div id="content" class="animate-bottom"> -->
  <header class="masthead text-center text-white d-flex" id="mastt">
    <div id="over">
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-12 mx-auto">

          <div id="carousel">

             <div class="selected" id="first">
              <img src="img/display/cutout/DS101.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">CUTOUTS</div>
            </div>

            <div class="next" id="second">
              <img src="img/display/display-board/DS119.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">DISPLAY BOARDS</div>
            </div>

            <div class="nextRightSecond">
              <img src="img/gift/banner-pens/PN601.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">BANNER PENS</div>
            </div>

            <div class="hideRight">
              <img src="img/gift/coffee-mug/CM202.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">COFFEE MUGS</div>
            </div>

            <div class="hideRight">
              <img src="img/gift/diaries/DR101.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">DIARIES</div>
            </div>

            <div class="hideRight">
              <img src="img/gift/key-rings/KR407.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">KEY RINGS</div>
            </div>

            <div class="hideRight">
              <img src="img/gift/lanyard/LY505.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">LANYARDS</div>
            </div>

            <div class="hideRight">
              <img src="img/gift/metal-pens/PN609.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0);  font-weight:bold ;">METAL PENS</div>
            </div>

            <div class="hideRight">
              <img src="img/gift/stylus-pens/PN640.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">STYLUS PENS</div>
            </div>

            <div class="hideRight">
              <img src="img/gift/tote-bags/TB653.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">TOTE BAGS</div>
            </div>

            <div class="hideRight">
              <img src="img/gift/towels/TL701.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">TOWELS</div>
            </div>

            <div class="hideRight">
              <img src="img/gift/travel-mug/TM760.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">TRAVEL MUGS</div>
            </div>

            <div class="hideRight">
              <img src="img/gift/t-shirt/TS801.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">T-SHIRTS</div>
            </div>

            <div class="hideRight">
              <img src="img/gift/usb-pens/PN642.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">USB PENS</div>
            </div>

            <div class="hideRight">
              <img src="img/gift/water-bottle/WB901.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">WATER BOTTLE</div>
            </div>

            <div class="hideRight" id="last">
              <img src="img/packaging/PK112.jpg">
              <div class="car-title" style="color:rgb(255, 255, 0); text-align:center; margin-top:-40px; padding:10px; width:100%; background:rgb(255, 102, 0); font-weight:bold ;">PACKAGING</div>
            </div>

          </div>

          <div class="buttons">
            <button id="prev">Prev</button>
            <button id="next">Next</button>
          </div>
<!--      <div id="carouselgallery" class="carousel slide" data-ride="carousel" data-interval="1000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/dummy-640x310-11.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/dummy-640x310-22.jpg" alt="2 slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/dummy-640x310-1.jpg" alt="3 slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselgallery" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" id="control-btn" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselgallery" role="button" data-slide="next">
          <span class="carousel-control-next-icon" id="control-btn" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
          </div>
        </div> -->
        <!--    <span id="sl_i1" class="sl_command sl_i">&nbsp;</span>
        <span id="sl_i2" class="sl_command sl_i">&nbsp;</span>
        <span id="sl_i3" class="sl_command sl_i">&nbsp;</span>
        <span id="sl_i4" class="sl_command sl_i">&nbsp;</span>
        <div id="slideshow">
          <a class="commands prev commands1" href="#sl_i4" style="color:white; font-size:60px;">&lt;</a>
          <a class="commands next commands1" href="#sl_i2" style="color:white; font-size:60px;">&gt;</a>
          <a class="commands prev commands2" href="#sl_i1" style="color:white; font-size:60px;">&lt;</a>
          <a class="commands next commands2" href="#sl_i3" style="color:white; font-size:60px;">&gt;</a>
          <a class="commands prev commands3" href="#sl_i2" style="color:white; font-size:60px;">&lt;</a>
          <a class="commands next commands3" href="#sl_i4" style="color:white; font-size:60px;">&gt;</a>
          <a class="commands prev commands4" href="#sl_i3" style="color:white; font-size:60px;">&lt;</a>
          <a class="commands next commands4" href="#sl_i1" style="color:white; font-size:60px;">&gt;</a>
          <div class="containerc">
            <div class="c_slider"></div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  </header>

   <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <h1 class="section-heading">Welcome to Qanopy Impex!</h1>
            <hr class="light my-4">
            <p class="text-faded mb-8">Qanopy is an export house for promotional products based in New Delhi, India. We provide high quality goods at affordable and competitive prices all over the world.</p>
            <p class="text-faded mb-8">We are one of those companies that offer a large number of products under one canopy. Our customer support team works efficiently for your assistance round the clock.</p>
            <p class="text-faded mb-8">We always welcome out potential customers when they visit our website to determine about the products they are interesed in. Our top priority is to deliver quality products within stipulated time. All the products undergo strict quality check before shipment.</p>
            <p class="text-faded mb-8">You can simply contact us for any assistance and we assure you that all your queries shall be promptly answered. We shall be delighted to provide our utmost support for promotion of your business.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto text-center">
            <h1 class="section-heading-white">Let's Get In Touch!</h1>
            <hr class="my-4">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3" id="form_container">
                        <p> Please send your message below. We will get back to you at the earliest! </p>
                        <form role="form" method="post" id="reused_form" action="submit.php">
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label for="message"> Message:</label>
                                    <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000" rows="7"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label for="name"> Your Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="email"> Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <button type="submit" class=" btn btn-lg btn-default pull-right" >Send &rarr;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
      <!--      <p class="mb-5">Ready to start your next promotional campaign with us? That's great! Send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
      <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>+919958369644</p>
          </div>
          <div class="col-lg-12 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:orders@qanopy.co.in">orders@qanopy.co.in</a>
            </p>
          </div>
        </div> -->
     <!-- </div> -->
    </section>
    <footer id="footer">
        <div class="container-fluid text-center">
          <div class="row">
            <div class="col-lg-6">
              <i class="fa fa-copyright"></i> Qanopy Impex Pvt. Ltd.
            </div>
            <div class="col-lg-6 container-fluid">
            Designed and Developed By <a href="http://www.drawfstar.com" target="_blank">DrawfStar</a>
            </div>
          </div>
        </div>
    </footer>
  </div>

  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title text-center">Success!</h4>
    </div>
    <div class="modal-body">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-center text-center">
            <p class="mb-5">Thank You! We will get back to you in 24 hours.</p>
          </div>
        </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>


<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <h4 class="modal-title text-center">Try Again!</h4>
  </div>
  <div class="modal-body">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-center text-center">
          <p class="mb-5">Request Not Sent! Try Again.</p>
        </div>
      </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
</div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>
    <script src="js/animate.js"></script>
    <script type="text/javascript">
    // var start ;
    // document.getElementById("mainNav").style.display = "none" ;
    // function load(){
    //   start=setTimeout(showpage,4500) ;
    // }
    //
    // function showpage(){
    //   document.getElementById("loader").style.display = "none" ;
    //   document.getElementById("mainNav").style.display = "block" ;
    //   document.getElementById("content").style.display = "block" ;
    }
    </script>

    <?php if($show_modal == 1):?>
      <script> $('#myModal').modal('show');</script>
    <?php endif;?>

    <?php if($show_modal == -1):?>
      <script> $('#myModal2').modal('show');</script>
    <?php endif;?>

  </body>
</html>
