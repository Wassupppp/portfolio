<?php include("../php/password_protect.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../flavicon.png">

    <title>Portfolio | Valentin Poujade</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../album.css" rel="stylesheet">
  </head>

  <body>

    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-transparent">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Valentin Poujade</a>
          
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="../index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Activités
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="act_pro.php">Professionnels</a>
                    <a class="dropdown-item" href="act_sco.php">Scolaire</a>
                    <a class="dropdown-item" href="act_perso.php">Personnels</a>
                  </div>
                </li>

                <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Epreuve E4
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="e4.php">Projet covoiturage</a>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Epreuve E6
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="e6_competence.php">Compétences</a>
                        
                        <a class="dropdown-item" href="e6_synthese.php">Tableau de synthèse</a>
                      </div>
                    </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Veille technologique
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="veille.php">Présentation</a>
                    <a class="dropdown-item" href="veille_dispositif.php">Dispositif de veille</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
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
              <img src="../images/E4/login.PNG" width="100%" />
            </div>
            <div class="col-md-12">
                <h1 class="py-5 my-5"><span>Accueil</span></h1>
              <img src="../images/E4/accueil.PNG" width="100%" />
            </div>
            <div class="col-md-12">
                <h1 class="py-5 my-5"><span>Compléter profile</span></h1>
              <img src="../images/E4/completeProfile.PNG" width="100%" />
            </div>
            <div class="col-md-12">
                <h1 class="py-5 my-5"><span>Proposer nouveau trajet</span></h1>
              <img src="../images/E4/newTrajet.PNG" width="100%" />
            </div>
            <div class="col-md-12">
                <h1 class="fancy py-5 my-5"><span>Mes trajets et réservations</span></h1>
              <img src="../images/E4/trajetReservation.PNG" width="100%" />
            </div>
            <div class="col-md-12">
                <h1 class="py-5 my-5"><span>Paramètres</span></h1>
              <img src="../images/E4/parametre.PNG" width="100%" />
            </div>
          </div>
        </div>
      </div>

    </main>

    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
                <p>&copy; 2018 Valentin POUJADE</p>
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
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/vendor/holder.min.js"></script>
    <script src="../index.js"></script>
  </body>
</html>
