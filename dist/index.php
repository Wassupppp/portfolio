<?php include("php/password_protect.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="flavicon.png">

    <title>Portfolio | Valentin Poujade</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
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
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Activités
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="app/act_pro.php">Professionnels</a>
                    <a class="dropdown-item" href="app/act_sco.php">Scolaire</a>
                    <a class="dropdown-item" href="app/act_perso.php">Personnels</a>
                  </div>
                </li>
              
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Epreuve E4
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="app/e4.php">Projet covoiturage</a>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Epreuve E6
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="app/e6_competence.php">Compétences</a>
                    <a class="dropdown-item" href="app/e6_synthese.php">Tableau de synthèse</a>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Veille technologique
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="app/veille.php">Présentation</a>
                    <a class="dropdown-item" href="app/veille_dispositif.php">Dispositif de veille</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="app/contact.php">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h2 class="jumbotron-heading">Portfolio | BTS SIO SLAM </h2>
          <p class="lead">Bienvenue sur mon portfolio, en vue de mon BTS, vous trouverez sur différentes sections toutes les informations à mon sujet.</p>
          <p class="lead">2018 - 2019</p>
          <p>
            <a href="#presentation" class="btn btn-primary my-2">Go !</a>
            <a href="#presentation" class="btn btn-secondary my-2">Go !</a>
          </p>
        </div>
      </section>
      <!-------<PRESENTATION>--------------------------------------------------------------->
      <div id="presentation" class="album py-5">
        <div class="container">
          <div class="row justify-content-md-center text-center">
            <div class="col-lg-12">
                <img class="rounded-circle" src="images/portrait.png" alt="Generic placeholder image" width="140" height="140">
                <h1 class="py-5"><span>Valentin POUJADE</span></h1>
                <p class="lead">Développeur en formation d"apprentissage dans l"entreprise Unigrid Solution, 
                  ce site est un Portfolio pour valider mon diplôme BTS SIO (Services Informatiques aux Organisations) option SLAM 
                  (Solutions Logicielles et Applications Métiers). Il regroupe mes différents travaux professionnels et personnels des différents projets 
                  ou tâches (Front-End; Back-End; Serveurs; Applications <span class="font-italic cursor-help" title="L"interface homme-machine (IHM) est 
                  l"interface utilisateur qui relie l"opérateur au dispositif de commande d"un système industriel.">IHM</span>; 
                  <a href="app/projects.php">voir plus</a> ...) que j"ai effectué au cours de mon apprentissage dans le développements.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-------</PRESENTATION>--------------------------------------------------------------->

      <!-------<BTS SIO PRESENTATION>--------------------------------------------------------------->
      <div class="bg-light" id="btssio">
        <h1 class="py-5"><span>BTS SIO SLAM</span></h1>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <p>
                Le Brevet de Technicien Supérieur (BTS) Services Informatiques aux Organisations (SIO) s"adresse à ceux qui souhaitent se former en deux ans 
              aux métiers d"admnistrateur réseau (option SISR) ou de développeur pour intégrer directement le marché du travail ou continuer des études dans le domaine de l"informatique.
              </p>
              <p>Au sein de l"antenne du CFAI 84 situé dans la ville de Pertuis, ce BTS est sous forme d"alternance qui nous demande alors d"intégrer une entreprise pour être accepter.
                L"alternance désigne un système de formation au cours duquel l"étudiant alterne entre une formation théorique dans le centre de formation durant une semaine et l"autre 
                semaine une expérience professionnelle en entreprise.
              </p>
              <div class="text-center">
                <img id="cfai84" src="images/cfai/cfai84.jpg" />
              </div>
              <p>L"option SLAM permet de suivre l"ensemble du cycle de vie des applications :</p>
              <ul>
                <li>Analyser les besoins des utilisateurs finaux</li>
                <li>Rechercher et choisir une solution adaptée</li>
                <li>Concevoir et développer des applications (génie logiciel)</li>
                <li>Assurer la maintenance des programmes qui garantissent le bon fonctionnement de ces applications</li>
              </ul>
              <h2 id="btssio-title">L"examen du BTS SIO</h2>
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Coefficient</th>
                      <th scope="col">Durée</th>
                      <th scope="col">Forme</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Culture générale et expression</th>
                      <td>2</td>
                      <td>4h</td>
                      <td>Ecrit</td>
                    </tr>
                    <tr>
                      <th scope="row">Expression et communication en langue anglaise</th>
                      <td>2</td>
                      <td>2h</td>
                      <td>Ecrit + 20min oral</td>
                    </tr>
                    <tr>
                      <th scope="row">Mathématiques</th>
                      <td>2</td>
                      <td>2h</td>
                      <td>Ecrit</td>
                    </tr>
                    <tr>
                      <th scope="row">Algorithmique appliquée</th>
                      <td>1</td>
                      <td>~</td>
                      <td>CCF</td>
                    </tr>
                    <tr>
                      <th scope="row">Analyse économique, managériale et juridique des services informatiques</th>
                      <td>3</td>
                      <td>4h</td>
                      <td>Ecrit</td>
                    </tr>
                    <tr>
                      <th scope="row">Conception et maintenance de solutions informatiques</th>
                      <td>4</td>
                      <td>40min</td>
                      <td>Pratique et Oral</td>
                    </tr>
                    <tr>
                      <th scope="row">Production et fourniture de services informatiques</th>
                      <td>5</td>
                      <td>4h</td>
                      <td>Ecrit</td>
                    </tr>
                    <tr>
                      <th scope="row">Parcours de professionnalisation</th>
                      <td>3</td>
                      <td>40min</td>
                      <td>Oral</td>
                    </tr>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
      <!-------</BTS SIO PRESENTATION>--------------------------------------------------------------->

      <!-------<MAITRISE ET COMPETENCE>--------------------------------------------------------------->
      <div id="maitriseCompetence">
          <h1 class="py-5"><span>Maîtrises et Compétences</span></h1>
          <div style="margin-top: 6em;" class="container">
              <div class="row mx-auto">
                <div class="col-lg-4">
                  <h2 style="text-align:center">Languages</h2>
                  <img class="logoCompetence" src="images/logo/icons8_Developer_64.png"/>
                  <div class="lead skill">PHP
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">HTML / CSS
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">JavaScript
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">Java
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40 %</div>
                    </div><br />
                  </div>
                  
                  <div class="lead skill">MySQL
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">POO
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">Jquery
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">Bootstrap
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">72 %</div>
                    </div><br />
                  </div>
                </div>
                <div class="col-lg-4">
                  <h2 style="text-align:center">OS & Outils</h2>
                  <img class="logoCompetence" src="images/logo/icons8_Linux_64.png"/>
                  <div class="lead skill">Linux
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">Windows
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100">94 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">MacOS
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">Git
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">LAMP : "Linux Apache MySQL PHP"
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">Joomla
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">63 %</div>
                    </div><br />
                  </div>
                </div>
                <div class="col-lg-4">
                  <h2 style="text-align:center">Logiciels</h2>
                  <img class="logoCompetence" src="images/logo/icons8_Software_64.png"/>
                  <div class="lead skill">Suite Office
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">Photoshop
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">MySQL Workbench
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100">53 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">VMware
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100">73 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">Vegas Pro
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65 %</div>
                    </div><br />
                  </div>
                </div>
              </div>
            </div> 
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="content">
                    <a href="images/skills/htmlcolor.png">
                  <div class="content-overlay"></div>
                    <img class="content-image" src="images/skills/htmlNeew.png">
                    <div class="content-details">
                        <h3>HTML 5</h3>
                    </div>
                    </a>
                </div>
              </div>
              <div class="col">
                  <div class="content">
                      <a href="images/skills/csscolor.png">
                    <div class="content-overlay"></div>
                      <img class="content-image" src="images/skills/css3.png">
                      <div class="content-details">
                          <h3>CSS 3</h3>
                      </div>
                      </a>
                  </div>
              </div>
              <div class="col">
                  <div class="content">
                      <a href="images/skills/js.png">
                    <div class="content-overlay"></div>
                      <img class="content-image" src="images/skills/js.png">
                      <div class="content-details">
                          <h3>JavaScript</h3>
                      </div>
                      </a>
                  </div>
              </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="content">
                        <a href="images/skills/jquery.png">
                      <div class="content-overlay"></div>
                        <img class="content-image" src="images/skills/php.png">
                        <div class="content-details">
                            <h3>PHP 7</h3>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="content">
                        <a href="images/skills/mysql.png">
                      <div class="content-overlay"></div>
                        <img class="content-image" src="images/skills/dbmysql.png">
                        <div class="content-details">
                            <h3>Structured Query Language (SQL)</h3>
                        </div>
                        </a>
                    </div>
                </div>
              
                <div class="col">
                    <div class="content">
                        <a href="images/skills/jquery.png">
                      <div class="content-overlay"></div>
                        <img class="content-image" src="images/skills/jquery.png">
                        <div class="content-details">
                            <h3>Jquery Framework</h3>
                        </div>
                        </a>
                    </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-4">
                      <div class="content">
                          <a href="images/skills/bootstrap.png">
                        <div class="content-overlay"></div>
                          <img class="content-image" src="images/skills/bootstrap.png">
                          <div class="content-details">
                              <h3>Bootstrap Framework</h3>
                          </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="content">
                      <a href="images/skills/gitpng.png">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="images/skills/gitpng.png">
                        <div class="content-details">
                            <h3>Git software</h3>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="content">
                      <a href="images/skills/photoshop.png">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="images/skills/photoshop.png">
                        <div class="content-details">
                            <h3>Photoshop</h3>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      <!-------</MAITRISE ET COMPETENCE>--------------------------------------------------------------->

      <!-------<CURSUS>--------------------------------------------------------------->
      <div id="parcours" class="bg-light py-5">
        <h1 class="py-5"><span>Cursus</span></h1>
        <div id="containerCursus" class="container">
          <div class="row justify-content-around">
            <div class="col-5">
              <h2 style="text-align:left;">Formation</h2>
              <h2 class="lead">Scolaire</h2>
                <div class="row top-buffer-30">
                  <div class="col-md-2 box-date-cursus-left">
                      <p class="date-cursus">En cours</p>
                  </div>
                  <div class="col-md-10 box-cursus-left">
                    <h3>BTS <span class="font-italic cursor-help" title="Services Informatiques aux Organisations">SIO </span>option <span class="font-italic cursor-help" title="Solutions Logicielles et Applications Métiers">SLAM</span></h3>
                    <p>CFAI 84 - Antenne de Pertuis</p>
                  </div>
                </div>
                
                <div class="row top-buffer-30">
                  <div class="col-md-2 box-date-cursus-left">
                      <p class="date-cursus">2017</p>
                  </div>
                  <div class="col-md-10 box-cursus-left">
                    <h3>Bac Professionnels <span class="font-italic cursor-help" title="Système Electronique et Numétique">SEN</span> <span class="font-italic cursor-help" title="Télécommunication et Réseaux">TR</span></h3>
                    <p>Lycée Montesquieu</p>
                  </div>
                </div>

                <div class="row top-buffer-30">
                  <div class="col-md-2 box-date-cursus-left">
                      <p class="date-cursus">2015</p>
                  </div>
                  <div class="col-md-10 box-cursus-left">
                    <h3>Brevet des collèges</h3>
                    <p>Collège Alphonse Silve</p>
                  </div>
                </div>
            </div>
            <div class="col-5">
              <h2 style="text-align:right">Expérience</h2>
              <h2 class="lead display-5" style="text-align:right">Professionnels</h2>
              <div class="row top-buffer-30">
                <div class="col-md-10 box-cursus-right">
                  <h3>Unigrid Solution</h3>
                  <p>Alternance</p>
                </div>
                <div class="col-md-2 box-date-cursus-right">
                  <p class="date-cursus">En cours</p>
                </div>
              </div>
              <div class="row top-buffer-30">
                <div class="col-md-10 box-cursus-right">
                  <h3>SystemeBox</h3>
                  <p>Alternance</p>
                </div>
                <div class="col-md-2 box-date-cursus-right">
                  <p class="date-cursus">2017</p>
                </div>
              </div>

              <div class="row top-buffer-30">
                <div class="col-md-10 box-cursus-right">
                  <h3>Service informatique mairie</h3>
                  <p>Stage professionnels</p>
                </div>
                <div class="col-md-2 box-date-cursus-right">
                  <p class="date-cursus">2017</p>
                </div>
              </div>

              <div class="row top-buffer-30">
                <div class="col-md-10 box-cursus-right">
                  <h3>Orange Télécom</h3>
                  <p>Stage professionnels</p>
                </div>
                <div class="col-md-2 box-date-cursus-right">
                  <p class="date-cursus">2016</p>
                </div>
              </div>
              
              <div class="row top-buffer-30">
                <div class="col-md-10 box-cursus-right">
                  <h3>Vinci autoroute</h3>
                  <p>Stage professionnels</p>
                </div>
                <div class="col-md-2 box-date-cursus-right">
                  <p class="date-cursus">2016</p>
                </div>
              </div>

              <div class="row top-buffer-30">
                <div class="col-md-10 box-cursus-right">
                  <h3>Securitec</h3>
                  <p>Stage professionnels</p>
                </div>
                <div class="col-md-2 box-date-cursus-right">
                  <p class="date-cursus">2015</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-------</CURSUS>--------------------------------------------------------------->
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
    <script>window.jQuery || document.write("<script src='assets/js/vendor/jquery-slim.min.js'><\/script>")</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script src="dist/js/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-rss/3.3.0/jquery.rss.js"></script>
    
    <script src="index.js"></script>
  </body>
</html>