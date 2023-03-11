<?php include("php/password_protect.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="flavicon.png">

    <title>Portfolio | Ouassim Khaddioui</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>

    <header>
        <?php include("menu.php")?>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h2 class="jumbotron-heading">Application Covoiturage</h2>
          <p class="lead">Vous trouverez ci-dessous les différents projets que j'ai développé durant ces dernières années au niveau scolaire et professionnel.</p>
          <p>
            <a href="#presentation" class="btn btn-primary my-2">Go !</a>
            <a href="#presentation" class="btn btn-secondary my-2">Go !</a>
          </p>
        </div>
      </section>

      <div id="presentation" class="album py-5 bg-light">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <h1 class="py-5 my-5"><span>Login</span></h1>
              <img src="images/E4/login.PNG" width="100%" />
            </div>
            <div class="col-md-12">
                <h1 class="py-5 my-5"><span>Accueil</span></h1>
              <img src="images/E4/accueil.PNG" width="100%" />
            </div>
            <div class="col-md-12">
                <h1 class="py-5 my-5"><span>Compléter profile</span></h1>
              <img src="images/E4/completeProfile.PNG" width="100%" />
            </div>
            <div class="col-md-12">
                <h1 class="py-5 my-5"><span>Proposer nouveau trajet</span></h1>
              <img src="images/E4/newTrajet.PNG" width="100%" />
            </div>
            <div class="col-md-12">
                <h1 class="py-5 my-5"><span>Mes trajets et réservations</span></h1>
              <img src="images/E4/trajetReservation.PNG" width="100%" />
            </div>
            <div class="col-md-12">
                <h1 class="py-5 my-5"><span>Paramètres</span></h1>
              <img src="images/E4/parametre.PNG" width="100%" />
            </div>
          </div>
        </div>
      </div>

    </main>

    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
                <p>&copy; 2023 Ouassim KHADDIOUI</p>
            </div>
            <div style="text-align: right;" class="col-md-4 offset-md-4">
                <a href="#">Back to top</a>
            </div>
          </div>
        </div>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>
