<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"The Team | marites");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
?>  


        <link href="css/creator-portfolio.min.css" rel="stylesheet">
    </head>
    
    <body style="background: #f1f1f1">

        <?php include 'includes/navbar.php'; ?>
   

        <div class="jumbotron text-white" style= "text-align: center;">
            <div class="container">
              <h1 class="display-3"  style= "color: black;"><b>THE MARITES CREATORS</b></h1>
              <p style= "color: black;"> <b><i> FEU Alabang - Bachelor of Science in Information Technology with Specialization in Service Management and Business Analytics</i></p>
            </div>
        </div>

        
      <div class="container">
        
        <section class="content-section" id="portfolio">
            
          <div class="container">
              
            <div class="content-section-heading text-center">
              <h3 class="text-secondary mb-0">The Minds Behind Marites</h3>
              <h2 class="mb-5">The Team</h2><br>
            </div>
            <div class="row no-gutters">
              <div class="col-lg-6">
                  <a class="portfolio-item" href="https://www.facebook.com/ynaangelika" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Yna Angelika Casabuena</h2>
                      <p class="mb-0 text-white">"ano ga naman iyan"</p>
                    </span>
                  </span>
                  <img class="img-fluid" src="img/yna.jpg" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                <a class="portfolio-item" href="https://www.facebook.com/sophiaavery.arboleda" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Sophia Avery Arboleda</h2>
                      <p class="mb-0 text-white">"eto namang si idol"</p>
                    </span>
                  </span>
                    <img class="img-fluid" src="img/sophia.jpg" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                <a class="portfolio-item" href="https://www.facebook.com/profile.php?id=100010087812458" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>Carlos Marcial Macarandang</h2>
                      <p class="mb-0 text-white">"ahAaaHahaAHAHa"</p>
                    </span>
                  </span>
                  <img class="img-fluid" src="img/carlos.jpg" alt="">
                </a>
              </div>
              <div class="col-lg-6">
                <a class="portfolio-item" href="https://www.facebook.com/jamesmichael.silverio" target="_blank">
                  <span class="caption">
                    <span class="caption-content">
                      <h2>James Michael Silverio</h2>
                      <p class="mb-0 text-white">"...."</p>
                    </span>
                  </span>
                    <img class="img-fluid" src="img/silverio.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
        </section>
          

      </div>
        
        <?php include 'includes/footer.php'; ?>
        
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>