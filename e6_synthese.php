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
          <h2 class="jumbotron-heading">Tableau de synthèse</h2>
          <p class="lead">Il regroupe des situation effectués en entreprise ou au CFA ainsi que toutes les compétences mis en oeuvre lors de cette situation.</p>
          <p>
              <a href="tableau_synthese_2023.xlsx" class="btn btn-primary my-2">Version XLS</a>
              <a href="tableau_E4.pdf" class="btn btn-secondary my-2">Version PDF</a>
          </p>
        </div>
      </section>

      <div id="presentation" class="album py-5 bg-light">
        <h1 class="py-5"><span>Tableau de synthèse</span></h1>
        <div class="container">
          <div class="row">
              <p>Vous pouvez retrouver tout les documents liés aux 
                  différentes situatiuon professionnelles inscrite dans 
                  le tableau de synthèse (ci-dessous) dans la section <a href="act_pro.php">Activités > Professionnelles</a>
                </p>
            <div class="col-md-6 offset-md-1">
                <embed src="tableau_E4.pdf" width=900 height=600 type='application/pdf'/>
            </div>
            <div class="col-md-12">
              <ul>
              <!--  <li><h2>Situation vécues ou observées en stage de première année</h2>
                  <ul>
                    <li><h3 class="py-3">Installation et configuration d'un Wespci</h3>
                      <ul>
                        <li><h5>Situation obligatoire : </h5>
                          <ul>
                            <li><i>Participation à un projet d'évolution d'un SI (Solution Applicative et d'infrastructure portant priotairement sur le domaine de spécialité du candidat)</i></li>
                            <li><i>Elaboration de documents relatifs à la production et à la fourniture de services</i></li>
                          </ul>
                        </li>
                        <li><h5>Compétences mises en œuvre :</h5>
                          <ul>
                            <li><b>A1.1.1</b> , <i>Participation à un projet d'évolution d'un SI (Solution Applicative et d'infrastructure portant priotairement sur le domaine de spécialité du candidat)</i></li>
                            <li><i>Elaboration de documents relatifs à la production et à la fourniture de services</i></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>-->
                <li><h2>Situation vécues ou observées en stage de deuxième année</h2>
                  <ul>
                    <li><h3 class="py-3">Gestion des sauvegardes d'application</h3>
                      <ul>
                        <li><h5>Situation : </h5>
                          <ul>
                            <li><i>Participation a la sauvegarde des bases de données applicatifs en version prod.</i></li>
                          </ul>
                        </li>
                        <li><h5>Compétences mises en œuvre :</h5>
                          <ul>
                            <li><i>Gérer des sauvegardes</i></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><h3 class="py-3">Gestion des demandes d'assistance et d'évolution</h3>
                      <ul>
                        <li><h5>Situation : </h5>
                          <ul>
                            <li><i>Participation à la résolution de ticket faîtes par le client.</i></li>
                            <li><i>Demande de maintenance, évolution ou correction.</i></li>
                          </ul>
                        </li>
                        <li><h5>Compétences mises en œuvre :</h5>
                          <ul>
                            <li><i>Collecter, suivre et orienter des demandes.</i></li>
                            <li><i>Traiter des demandes concernant les services réseau et système, applicatifs</i></li>
                            <li><i>Traiter des demandes concernant les applcations </i></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><h3 class="py-3">Projet FastSushi</h3>
                      <ul>
                        <li><h5>Situation : </h5>
                          <ul>
                            <li><i>Création d'un site, avec gestion de base de données pour établir des commandes de sushi</i></li>
                          </ul>
                        </li>
                        <li><h5>Compétences mises en œuvre :</h5>
                          <ul>
                            <li><i>Analyser les objectifs et les modalités d'organisation d'un projet</i></li>
                            <li><i>Planifier les activités.</i></li>
                            <li><i>Evaluer les indicateurs de suivi d'un projet et analyser les écarts.</i></li>
                            <li><i>Déployer un service</i></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><h3 class="py-3">Portfolio</h3>
                      <ul>
                        <li><h5>Situation : </h5>
                          <ul>
                            <li><i>Création d'un site portfolio</i></li>
                          </ul>
                        </li>
                        <li><h5>Compétences mises en œuvre :</h5>
                          <ul>
                            <li><i>Mettre en place son environnement d'apprentissage personnel</i></li>
                            <li><i>Mettre en oeuvre des outils et stratégies de vieille informationnelle</i></li>
                            <li><i>Gérer son identité professionnelle</i></li>
                            <li><i>Développer son projet professionnel</i></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><h3 class="py-3">Site streaming</h3>
                      <ul>
                        <li><h5>Situation : </h5>
                          <ul>
                            <li><i>Création d'un site de gestion de série</i></li>
                          </ul>
                        </li>
                        <li><h5>Compétences mises en œuvre :</h5>
                          <ul>
                            <li><i>Planifier les activités</i></li>
                            <li><i>Evaluer les indicateurs de suivi d'un projet et analyser les écarts</i></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
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
