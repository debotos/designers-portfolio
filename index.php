<!DOCTYPE html>
<html lang="en" class="full-height">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Tanvir Hasan</title>

  <!--Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

  <!-- Template styles -->
  <link href="css/base.css" rel="stylesheet">
  
  <!--Fancybox Style-->
  <link href="css/jquery.fancybox.min.css" rel="stylesheet">

  <!--Custom Style-->
  <link href="css/custom.css" rel="stylesheet">

</head>

<body>


  <!--Navbar-->
  <?php include('includes/navbar.php'); ?>
    <!--/.Navbar-->

    <!-- Intro Section -->
    <!--Carousel Wrapper-->
    <?php include('includes/carousel.php'); ?>
      <!--/Navigation & Intro-->

      <!--Main layout-->
      <main>
        <!-- First container -->
        <div class="container mt-3">
          <!-- Section About -->
          <?php include('includes/about.php'); ?>
            <!-- /.Section About -->
        </div>
        <!-- /.First container -->
        <!-- Second container -->
        <?php include('includes/what-i-do.php'); ?>
          <!-- Second container -->
          <!--Projects section v.2-->
          <?php include('includes/projects.php'); ?>
            <!--/Projects section v.2-->
            <!--Third container-->
            <div class="container-fluid" style="background-color: #f3f3f5;">
              <div class="container pt-3 pb-3">
                <?php include('includes/testimonial.php'); ?>
              </div>
            </div>
            <!--/Third container-->
            <div class="container">
              <!-- Contact -->
              <?php include('includes/contact.php'); ?>
            </div>
            <!--Third container-->
            <div class="container-fluid" style="background-color: #ce51a1;">
              <div class="row py-4">
                <div class="col-md-12 mt-2">
                  <!--Section heading-->
                  <h5 class="text-center white-text mb-2 wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                </div>
              </div>
            </div>
            <!--/Third container-->
      </main>
      <!--/Main layout-->



      <!-- Scrollspy -->
      <div class="dotted-scrollspy clearfix d-none d-sm-block">
        <ul class="nav smooth-scroll flex-column">
          <li class="nav-item"><a class="nav-link" href="#video-carousel-example2"><span></span></a></li>
          <li class="nav-item"><a class="nav-link" href="#about"><span></span></a></li>
          <li class="nav-item"><a class="nav-link" href="#portfolio"><span></span></a></li>
          <li class="nav-item"><a class="nav-link" href="#contact"><span></span></a></li>
        </ul>
      </div>

      <!--Footer-->
      <?php include('includes/footer.php'); ?>
        <!--/Footer-->

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- Fancybox JavaScript -->
        <script type="text/javascript" src="js/jquery.fancybox.min.js"></script>

        <script type="text/javascript" src="js/tether.min.js"></script>

        <script>
          //Animation init
          new WOW().init();

          // initialize scrollspy
          $('body').scrollspy({
            target: '.dotted-scrollspy'
          });

          // initialize lightbox
          // $(function() {
          //   $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
          // });

          $('.navbar-collapse a').click(function() {
            $(".navbar-collapse").collapse('hide');
          });

          
          $(document).on('click', 'a[href^="#video-carousel-example2"], a[href^="#about"], a[href^="#portfolio"], a[href^="#contact"]', function(event) {
            event.preventDefault();

            $('html, body').animate({
              scrollTop: $($.attr(this, 'href')).offset().top
            }, 500);
          })
          
          
        </script>
</body>

</html>
