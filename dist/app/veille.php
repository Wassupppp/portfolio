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
          <h2 class="jumbotron-heading">Veille technologique</h2>
          <p class="lead">Vous retrouverez, ci-dessous, mes méthodes de recherche de ma veille technologique sur le sujet de la reconnaissance faciale, des mouvements, par un système informatique ou IA</p>
          <p>
            <a href="#presentation" class="btn btn-primary my-2">Go !</a>
            <a href="#presentation" class="btn btn-secondary my-2">Go !</a>
          </p>
        </div>
      </section>

      <div id="presentation" class="album py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
                <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vRxVH2uJWl6KJI_G-ZICuflWbdlKcKFpxLBQ3yebXTjeVQMaUuLt-6mV7b-OQYmcU9zg05WEmSGmZEm/embed?start=false&loop=false&delayms=3000" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
            </div>
            <!-- <div class="col-md-12">
                <h1 class="fancy py-5"><span>Détection et reconnaissance faciale</span></h1>
                <p class="lead">
                  Un système de reconnaissance faciale est une application logicielle du domaine de la <a href="https://fr.wikipedia.org/wiki/Vision_par_ordinateur">vision par ordinateur</a> 
                  visant à reconnaître une personne à partir d'une image de son visage de manière automatique. C'est un sujet particulèrement étudié en vision par ordinateur, et très actif avec de très
                  nombreuses nouveautés, publications, brevets, et des conférences spécialisées. Elle chamboule aussi le domaine juridique car de très nombreux points sont à anticiper en termes de droits
                  à l'image, et autres (voir <a href="#legislation">section législation</a>).
                </p>
                <p class="lead">
                    La reconnaissance faciale permet d’adapter la vérification biométrique à toutes les situations - C'est une technologie très efficace qui est utilisée dans de nombreuses 
                    applications liées à la sécurité. Elle est par exemple un outil très fiable pour aider les forces de police à identifier des criminels, ou bien pour permettre aux services 
                    de douanes de vérifier l’identité des voyageurs. La reconnaissance faciale est peu invasifs car sans contact en comparaison avec les autres systèmes biométriques (empreintes digitales, 
                    reconnaissance de l'iris...) et son utilisation ne nécessite aucun outil spécifique, ce qui en fait la solution idéale pour l’identification de personnes dans une foule ou dans 
                    des espaces publics. 
                </p>
                <p class="lead">
                    Actuellement, la reconnaissance faciale est d'ores et déjà mise en place dans deux nombreux domaines. Elle permet par exemple de sécuriser des transactions 
                    en ligne; de déverrouiller ordinateur / mobile / console. Le fonctionnement de ces systèmes se base sur une ou plusieurs caméras pour reconnaître l'utilisateur.
                </p>
                <p class="lead">Ils peuvent également être utilisés afin de faciliter la vie de l'utilisateur, comme le font par exemple certains réseaux sociaux 
                  sur internet (Facebook1, Google+ 2) ou certaines applications mobiles (NameTag3, FaceRec 4) pour identifier des visages sur des images.
                  Ces systèmes se basent alors sur des photos/vidéos d'une ou plusieurs personnes.
                </p>
                <p class="lead">Il faut toutefois veiller à ne pas confondre la détection de visage, qui consiste à repérer qu'un visage est présent sur une image, 
                  et la reconnaissance faciale, qui consiste à reconnaître quelqu'un depuis une image ou une vidéo.
                </p>
            </div> -->
          </div>
        </div>
      </div>
      <!-- <div id="fonctionnement" class="bg-light">
        <h1 class="py-5"><span>Fonctionnement</span></h1>
        <div class="container">
          <div class="row">
            <p>La reconnaissance faciale est un technique qui permet à partir des traits de visage : </p>
            <p>
              <ul>
                <li><b>D’identifier une personne :</b> c’est-à-dire,  vérifier qu’une personne est bien celle qu’elle prétend être (dans le cadre d’un contrôle d’accès)</li>
                <li>ou</li>
                <li><b>D'authentifier une personne :</b> c’est-à-dire, de retrouver une personne au sein d’un groupe d’individus, dans un lieu, une image ou une base de données.</li>
              </ul>
            </p>
          </div>
        </div>
        
      </div>
      <div id="legislation">
        <h1 class="fancy py-5"><span>Aux yeux de la loi</span></h1>
        <div class="container">
           <p>Bien que prometteur pour la sécurité, la reconnaissance faciale soulève de nombreuses questions en matière de protection de la vie privée et de protection des données. 
            On s'interroge notamment sur le destin des clichés enregistré. Ainsi, 
          </p>
          <a href="http://www.assemblee-nationale.fr/15/propositions/pion0194.asp">http://www.assemblee-nationale.fr/15/propositions/pion0194.asp</a>
        </div>
       

      </div> -->
      

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
