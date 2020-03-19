<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
      <?php
      require "include/stylesheets.php";
      ?>
      <title>Home</title>
  </head>

  <body>
    <!-- row start -->
    <div class="row">
        <!-- white space rechts -->
      <div class="col-lg-2"></div>
  
      <!-- body start -->
      <div class="col-lg-8">
  
        <!-- container body start -->
        <div class="container-fluid">

        <?php
        include "include/carousel.php";
        require "include/NavBar.php";
        ?>

          <!--item row 1 begin-->
          <div class="row mt-4">

            <div class="col-sm-12 col-md-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <h5 class="card-title">Lijst voor het bruidspaar</h5>
                  <p class="card-text">
                    Bent u op zoek naar een handige manier om uw wenslijst bij te houden? Maak een account aan en deel de code met uw gasten.
                  </p>
                  <a href="registerBP.php" class="card-link">Maak een account</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body text-center">
                  <h5 class="card-title">Ik ben een gast</h5>
                  <p class="card-text">
                    Kijk naar de wensen van het bruidspaar, kies welk cadeau u gaat kopen en reserveer dit idee. Maak hier een account om bij de lijst te komen.
                  </p>
                  <a href="registerG.php.php" class="card-link">Wenslijst</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body text-center">
                  <h5 class="card-title">Contact</h5>
                  <p class="card-text">
                    Heeft u vragen? bruid, bruidegom of gast; u kunt hier terecht.
                  </p>
                  <a href="#" class="card-link">contact</a>
                </div>
              </div>
            </div>
          </div>
          <!--item row 1 end-->

          <!-- qoute start -->
          <div class="row mt-sm-4 mt-0">
            <div class="col-sm-12 col-md-8 text-sm-center text-md-left">
              <blockquote class="blockquote">
                <p class="mb-0">“We’re all a little weird. And life is a little weird. And when we find someone whose weirdness is compatible with ours, we join up with them and fall into mutually satisfying weirdness–and call it love – true love.”</p>
                <p class="blockquote-footer">Robert Fulghum <cite title="Source Title"> True Love</cite></p>
              </blockquote>
            </div>
          </div>
          <!-- qoute end -->

          <!-- footer start -->
          <footer class="footer">
            <div class="container">
              <p>Made by: Miel Fidder</p>
            </div>
          </footer>
          <!-- footer end -->
      
          </div>
          <!-- container body end -->
  
        </div>
        <!-- body end -->
  
      <!-- white space links -->
      <div class="col-lg-2"></div>
      </div>
      <!-- row end -->

      <!-- scripts -->
      <script src="js/jquery-3.4.1.js"></script>
      <script src="/js/jquery.min.js"></script>
      <script src="/js/popper.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
    </body>
  </html>
