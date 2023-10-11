<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>
<?php include('includes/header.php') ?>
<!-- <!DOCTYPE html>    
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
     <link href="images/logo99.jpg" rel="shortcut icon">
  <title>{PetParadise}- Online Pet shop</title>

  core CSS
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

</head>

*********************************************START OF NAVIGATION BAR****************************************

<body style="background-image: url('images/background1.jpg');background-repeat: no-repeat;" width=100%>

  <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.php">
          <h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;">
                 <img src="images/logo99.jpg"  width="15% "/>{PetParadise}- Online Pet Shop </h4>
        </a>
      </div>

      <div class="collapse navbar-collapse navbar-right wow fadeInDown">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
          <li><a href="about-us.php">About Us</a></li>
          <li><a href="available.php">Available Products</a></li>
          <li><a href="contacts.php">Contacts</a></li>

        </ul>
      </div>
    </div>
  </nav> -->

  <!--*********************************************START SLIDER************************************************-->

  <div class="container-fluid">
    <br>
    <div class="col-md-9 wow fadeInDown">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"
        style="background-color:#000; padding:10px;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/homepg1.jpg" alt="" style="width:100%;">
          </div>
          <div class="item">
            <img src="images/home3.jpg" alt="" style="width:100%;">
          </div>
          <div class="item">
            <img src="images/home2.jpg" alt="" style="width:100%;">
          </div>
        </div>


        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>

      <!--*********************************************Food PACKAGES************************************************-->



    </div>

    <div class="col-md-3">
      <div class="panel panel-default wow fadeInDown">
        <!-- Default panel contents -->

        <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Welcome To
          PetParadise <i class="glyphicon glyphicon-calendar"></i>
          <?php echo date('M d, Y');?>
        </div>

      </div>

      <div class="panel panel-default wow fadeInDown">
        <!-- Default panel contents -->
        <div class="panel-heading wow fadeInDown" style="font-weight:bold; font-size:16px; color:#36648B;">Petshop On
          Special Offer </div>
        <ul class="list-group">

          <li class="list-group-item wow fadeInDown">Dog - <span style="color:#8B8B00; font-weight:bold;">From Rs. 5000
            </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
          <li class="list-group-item wow fadeInDown">Fish - <span style="color:#8B8B00; font-weight:bold;">From Rs. 150
            </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>
          <li class="list-group-item wow fadeInDown">Cat - <span style="color:#8B8B00; font-weight:bold;">From Rs. 1000
            </span> <span style="color:#EE5C42;" class="glyphicon glyphicon-ok pull-right"></span></li>



        </ul>
        <a href="available.php" class="btn btn-success btn-sm pull-right wow fadeInDown">Click here to View More</a>
      </div>
      <br>
      <div class="panel panel-default wow fadeInDown">
        <div class="panel-heading wow fadeInDown" style="font-size:16px; font-weight:bold; color: #36648B;">Our Location
        </div>
      </div>

      <div class="recent-work-wrap">
        <img class="img-responsive wow fadeInDown" src="images/statemap.jpg" alt="">

        <div class="recent-work-inner">
          <a class="preview wow fadeInDown" href="images/statemap.jpg" rel="prettyPhoto"><br><span
              class="btn btn-success btm-sm pull-right">Preview Map</span></a>
        </div>
      </div>
    </div>
  </div>

  </div><!--/.container-->
  <br><br>

  <?php include('includes/footer.php');?><!--/#footer-->
  <!----loginModal----->
  <?php include('loginModal.php');?>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/wow.min.js"></script>
</body>

</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');
} ?>