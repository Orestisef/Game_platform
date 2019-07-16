<?php
  require_once 'controllers/authController.php';

  if (!isset($_SESSION['id'])) {
    header('location: signin.php');
    exit();
  }
 ?>
<!DOCTYPE html>
<html>
  <?php require_once 'partials/links.php' ?>
  <head>
    <meta charset="utf-8">
    <title>Κεντρική Σελίδα</title>
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/mainpage.css">
  </head>
  <body>
    <?php require_once 'partials/navbar.php' ?>

    <main role="main">
      <div class="section-1 box mobilebox"></div>
      <div class="album py-5 ">
        <div class="container">
          <div class="accordion" id="accordionExample">

            <div class="shadow-lg p-3 mb-5 bg-white rounded ">
              <div class="row">

                <div class="col-md-4">
                  <div class="card mb-4 shadow-lg">
                  <div class="card" style="width: 18rem;">
                    <img src="1.jpg" class="card-img-top" alt="first">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="Games/index.html" class="btn btn-primary">Παίξε τώρα</a>
                    </div>
                  </div>
              </div>
              </div>
              <div class="col-md-4">
              <div class="card mb-4 shadow-lg">
                <div class="card" style="width: 18rem;">
                  <img src="2.jpg" class="card-img-top" alt="first">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="Games/index.html" class="btn btn-primary">Παίξε τώρα</a>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-md-4">
              <div class="card mb-4 shadow-lg">
                <div class="card" style="width: 18rem;">
                  <img src="3.jpg" class="card-img-top" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="Games/index.html" class="btn btn-primary">Παίξε τώρα</a>
                  </div>
                </div>
              </div>
              </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
