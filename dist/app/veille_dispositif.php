<?php 
$_GET['app'] = "true";
include("../php/password_protect.php?app=true"); ?>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.2/bootstrap-table.css" rel="stylesheet">
    

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

                <li class="nav-item dropdown">
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

                <li class="nav-item dropdown active">
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
          <h2 class="jumbotron-heading">Dispositif veille technologique</h2>
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
              <img src="../pressbook_Screen.png" />
            </div>
            <div class="col-md-12">
                <a href="../PressBook_Framework_CMS.xlsx" class="btn btn-primary my-2">Version xlsx !</a>
            </div>

            <!-- <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Date</th>
                  <th scope="col">Site</th>
                  <th scope="col">Sujet</th>
                  <th scope="col">Lien</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">11/12/2018</th>
                  <td>orange.com</td>
                  <td>IA : la reconnaissance faciale est-elle raciste ?</td>
                  <td>
                    <a href="https://digital-society-forum.orange.com/fr/les-actus/1166-ia-quand-la-reconnaissance-faciale-a-des-biais-racistes">
                      https://digital-society-forum.orange.com/fr/les-actus/1166-ia-quand-la-reconnaissance-faciale-a-des-biais-racistes
                    </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">06/12/2018</th>
                  <td>fr.rbth.com</td>
                  <td>Un système de reconnaissance faciale russe fait ses preuves dans la traque aux criminels</td>
                  <td>
                    <a href="https://fr.rbth.com/tech/82004-russie-reconnaissance-faciale-ntechlab">
                      https://fr.rbth.com/tech/82004-russie-reconnaissance-faciale-ntechlab
                    </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">07/12/2018</th>
                  <td>europe1.fr</td>
                  <td>Microsoft adopte des principes de régulation et appelle à légiférer</td>
                  <td>
                    <a href="https://www.europe1.fr/technologies/reconnaissance-faciale-microsoft-adopte-des-principes-de-regulation-et-appelle-a-legiferer-3815531">
                      https://www.europe1.fr/technologies/reconnaissance-faciale-microsoft-adopte-des-principes-de-regulation-et-appelle-a-legiferer-3815531
                    </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">19/07/2018</th>
                  <td>cnetfrance.fr</td>
                  <td>Comment la reconnaissance faciale révolutionne les aéroports</td>
                  <td>
                    <a href="https://www.cnetfrance.fr/news/fini-les-passeports-comment-la-reconnaissance-faciale-revolutionne-les-aeroports-39871461.htm">
                      https://www.cnetfrance.fr/news/fini-les-passeports-comment-la-reconnaissance-faciale-revolutionne-les-aeroports-39871461.htm
                    </a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">16/04/2018</th>
                  <td>sciencesetavenir.fr</td>
                  <td>Reconnaissance facial en Chine</td>
                  <td>
                    <a href="https://www.sciencesetavenir.fr/high-tech/intelligence-artificielle/en-chine-la-reconnaissance-faciale-est-deja-omnipresente_123072">
                      https://www.sciencesetavenir.fr/high-tech/intelligence-artificielle/en-chine-la-reconnaissance-faciale-est-deja-omnipresente_123072
                    </a>
                  </td>
                </tr>
              </tbody>
            </table> -->
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
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/vendor/holder.min.js"></script>
    <script src="../index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.2/bootstrap-table.js"></script>
  </body>
</html>
