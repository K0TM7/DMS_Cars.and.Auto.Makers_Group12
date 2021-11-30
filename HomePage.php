<?php
include_once 'header.php';
?>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <p data-target="#myCarousel" data-slide-to="0" class="active"></p>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/car-logos.jpg" alt="car-logos" class="car-logos"><br><br>
        <div class="container">
          <div class="carousel-caption text-left">
            <?php
            if(isset($_SESSION["useruid"]))
            {
            echo  "<h1>Welcome back ".$_SESSION["useruname"]."</h1>";
            }
            else
            {
              echo"<h1>Welcome to AMD Company</h1>";
            }
        ?>
            <!--<p><a class="btn btn-lg btn-primary" href="sign.html" role="button">Sign up today</a></p>-->
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="./img/civic_sedan.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
        <h2>Cars</h2>
        <p>Sedans are not always the most stylish of choices, they can be comfortable, practical, and come in sizes ranging from small to full sizes. Tons of sedans are waiting to picked, come get yours today.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="./img/suv.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
        <h2>SUVS</h2>
        <p>Did you know SUVS gained tremendous popularity over the past several years and quickly became the most common body type you see on the road. Are you interested why? Come check our SUV'S section and find out why. .</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="./img/truck.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
        <h2>Trucks</h2>
        <p>A truck is a tool for work and the men who own them have important work to do. It taps into mens desire to be productive, capable, tough and experienced. Interested in these desire? Check out Truck's section.</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Just a Tap Away</h2>
        <p class="lead">Start shopping online.</p>
        <p class="lead">We have the most stock accessible for online buy in Canada.</p>
        <p class="lead">It is simple, safe and convenient.</p>

      </div>
      <div class="col-md-5">
        <img src="./img/simple.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">COVID-19 Safety</h2>
        <span class="text-muted">See for yourself.</span>
        <p class="lead">The health and safety of our associates is our number one priority at AMD. In addition to our online shopping experience, our touchless delivery and pickup process allows you to buy or trade your vehicle in a much safer way.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="./img/covid_safety.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
      </div>
    </div>
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <?php
include_once 'footer.php';
?>
</html>
