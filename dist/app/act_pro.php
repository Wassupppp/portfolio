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
    <style>kbd{display: block;}</style>
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

                <li class="nav-item dropdown active">
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
          <h2 class="jumbotron-heading">Activités professionnels</h2>
          <p class="lead">Vous trouverez ci-dessous les différents projets que j'ai développé durant ces dernières années au niveau scolaire et professionnel.</p>
          <p class="font-italic">Ces différentes activités sont identifiés par des compétences mises en oeuvre du <a href="e6_synthèse.php">tableau de synthèse</a></p>
          <p>
            <a href="#actPro" class="btn btn-primary my-2">Go !</a>
            <a href="#actPro" class="btn btn-secondary my-2">Go !</a>
          </p>
        </div>
      </section>

      <div id="actPro" class="album py-5 bg-light">
      <h2 class="ml-5 py-5">Situation vécues ou observées en stage de première année</h2>
      <div class="container bg-white py-3 mb-5" style="padding-bottom: 3em">
          <h3 class="title-situ-pro text-center">Accueil et prise en charge client et son intervention</h3>
          <h4 class="subtitle-situ-pro" id="cahiercharges" class="mt-5">Prise en charge d'un client</h4>
          <p>
            L'accueil d'un client demandant une prise en charge d'un appareil, tels que des ordinateurs, tablettes, imprimantes, etc.. se décomposent en plusieurs étapes. 
            Remplissage fiche d'intevention. Devis rapide si possible. 
            Explication du déroulement au client. Prise de Rdv et finition client.
          </p>
          <ul>
            <li><span class="font-weight-bold">Accueil du client</span> : cela consiste à poser les bonnes questions pour comprendre rapidement le problèmes ou ce que le client souhaite que nous lui apportons.</li>
            <li><span class="font-weight-bold">Diagnostique rapide</span> des problèmes que la personne subie, il faut continuer à poser les questions pour avoir toutes les informations nécessaires : 
              Conditions lorsque le problème apparait, Constater l'état et l'age de l'appareil, Demander de quelques manière le client utilise sont ordinateurs (tout les jours / une fois
              par mois..).
              <div class="row mt-3 mb-3">
                <div class="col">
                    <img width="100%" src="../images/interieur_pc.jpg" class="rounded float-right" alt="...">
                </div>
                <div class="col">
                    <img width="100%" src="../images/pieds_pc.jpg" class="rounded" alt="...">
                </div>
              </div>
            </li>
            <li><span class="font-weight-bold">Devis</span> suite au premier diagnostique, si le problème est sûr nous fixons un prix avec le client lui permettant d'accepter ou non la prise en charge de la machine. 
              En revanche si le problème demande une plus grande investigation, nous donnons une estimation au client et nous le recontactons pour fixer le prix exacte pour effectuer la réparation.
            </li>
            <li>Remplissage de <a href="#cahiercharges" class="font-weight-bold">la fiche d'intervention</a> où nous inscrivons le rapport du premier diagnostique avec toutes les informations que nous auront besoins lors de la réalisation de 
              l'intervention ainsi que les informations de la machine et du client (très important pour contacter le client en fin d'intervention).
            </li>
            <li><span class="font-weight-bold">Prise de rendez-vous</span> avec le client une fois de l'intervention, explication du déroulement et du processus de l'intervention et impression d'une copie de la fiche d'intervention
              pour le client lui permettant de nous reconctater pour diverses informations. Départ du client.
            </li>
          </ul>
          <h4 class="subtitle-situ-pro" id="cahiercharges" class="mt-5">Déroulement phase de réparation</h4>
          <ul>
            <li>Lecture de la fiche d'intervention au complet et découvre les problèmes à résoudre dans le rapport de la fiche. J'analyse la machine en question et me documente grâce à internet 
              sur le modèle de la machine ou du problème selon le cas. <br>
              Les problèmes les plus fréquents sont :<br>
              <img src="../images/icons8-hdd-64.png" class="rounded ml-5" alt="..." ><img  src="../images/icons8-voltage-64.png" class="rounded" alt="..." ><img src="../images/icons8-laptop-64.png" class="rounded" alt="..." >
              <img src="../images/icons8-usb-connector-64.png" class="rounded" alt="..." ><img  src="../images/icons8-software-installer-64.png" class="rounded" alt="..." ><img src="../images/icons8-operating-system-64.png" class="rounded" alt="..." >
              <ul>
                <li>Pannes de disque durs</li>
                <li>Pannes d'alimentation</li>
                <li>Défaillance écran d'ordinateurs portable</li>
                <li>Problèmes de ports (USB, alimentation,etc..)</li>
                <li>Problèmes logiciel</li>
                <li>Plantage Système d'exploitation</li>
              </ul>
            </li>
            <li>
              La phase de recherche et réparation se séparent en différentes parties :
              <ol>
                <li>Recherche de compréhension du problème en question</li>
                <li>Recherche de solution et réparation de l'appareil</li>
                <li>Devis pour effectuer l'intervention en termes de matériel (si défaut matériel) et ressources de temps</li>
                <li>Contact du client pour informer le prix final et si il souhaite ou non l'effectuer</li>
                <li>Démarrage de la réparation et résolution du problème</li>
              </ol>
            </li>
          </ul>
      </div>
      <div class="container bg-white py-3 mb-5" style="padding-bottom: 3em">
          <h3 class="title-situ-pro text-center">Développement site web entreprise CMS</h3>
      </div>
      <div class="container bg-white py-3 mb-5" style="padding-bottom: 3em">
          <h3 class="title-situ-pro text-center">Installation logiciel de gestion MJC (Windows Server)</h3>
          <p>Neophys</p>
      </div>
      <h2 class="ml-5 py-5">Situation vécues ou observées en stage de deuxième année</h2>
        <div class="container bg-white py-3 mb-5" style="padding-bottom: 3em">
          <h3 class="title-situ-pro text-center"><span>Recherche et développement solution WESBY</span></h3>
          <p>La recherche et le développement de cette solution regroupe la totalité de mes missions en entreprise et regroupe diverses compétences dans différents domaines. Elle est donc partagée en plusieurs situations :</p>
          <ul>
            <li><a href="#installconfigwespci">Installation et configuration d'un Wespci</a></li>
            <li><a href="#instalconfigwespci">Ajout de fonctionnalités ou modification de Wescan2® à la demande d’un client</a></li>
            <li><a href="#instalconfigwespci">Intégration d'un nouvel équipement</a></li>
          </ul>
          <h6>Annexes :</h6>
          <ul>
            <li><a href="#presentation">Présentation de la solution</a></li>
          </ul>
        </div>
        <div class="container bg-white py-3 mb-5" style="padding-bottom: 3em" id="installconfigwespci">
          <h3 class="title-situ-pro text-center"><span>Installation et configuration d'un Wespci</span></h3>
          <h4 class="lead">Sommaire</h4>
          <ol>
            <li><a href="#cahiercharges">Le cahier des charges</a></li>
            <li><a href="#wespci">WESPCI</a></li>
            <li><a href="#wesio">WESIO</a></li>
            <li><a href="#fonctwesby">Fonctionnement des appareils de la gamme Wesby</a></li>
            <li><a href="#procwespci">Procédure installation Wespci</a></li>
            <ul>
              <li>Services et outils requis</li>
              <li>Installation apache + mysql (+phpMyadmin) + php</li>
              <li>Installation MongoDB</li>
            </ul>
          </ol>
          <h4 class="subtitle-situ-pro" id="cahiercharges" class="mt-5">Le cahier des charges</h4>
          <h5 class="lasttile-situ-pro">L’expression des besoins</h5>
          <p>Le Wespci est un terminal de contrôle principal de la solution Wesby. Il doit fonctionner plusieurs jours 
            voir années sans coupure pour assurer le contrôle des équipements et communiquer continuellement avec les WESIO. 
            Il est donc primordial d’effectuer une installation propre et effectuer le plus de tests possibles pour la satisfaction 
            du client. La sauvegarde des relevés s’effectue en local sur la CFAST du Wespci mais aussi sur un serveur distant, cette 
            redondance permet donc de réduire le risque de perte de données, car les mêmes données sont dupliquées. </p>
            <p>Le Wespci à besoins de différents services et serveurs pour faire fonctionner les applications que compose notre logiciel Wescan (explication : fonctionnement des applications Wescan).
              </p>
            <h5 class="lasttile-situ-pro">Objectifs</h5>
            <ul>
              <li>Installation des services utile au bon fonctionnement du terminal Wespci et de son logiciel Wescan </li>
              <li>Optimisation de la connectivité avec les différents partis du réseau tel que les Wesio ou les appareils</li>
              <li>Mettre en place une solution assurant le fonctionnement des programmes au démarrage de la machine (création d’un service)</li>
              <li>Installer le serveur Web avec le serveur de base de données sur le même OS permettant le fonctionnement de Wescan sans connexion internet</li>
              <li>Créer une redondance des données (relevées des équipements) du serveur local sur un serveur distant (duplication des données)</li>
              <li>Tester l’optimisation, le temps de réponse et la pérennité d’échange avec les composants du réseau et tester des cas de pannes concrets telles </li>
                que la coupure d’électricité (redémarrage du Wespci sur une coupure non voulue), une coupure de connexion internet, etc.</li>
            </ul>
          <h4 class="subtitle-situ-pro" id="wespci" class="mt-5">WESPCI</h4>
          <p>Son rôle :  Analyse et collecte les données des WESIO et appareils d’un bâtiment</p>
          <p class="font-weight-bold">Caractéristiques :</p>
          <ul>
            <li>Processeur : Intel Bay trail series Processor</li>
            <li>Graphics : Chipset Intel HD Graphics</li>
            <li>Stockage : carte CFast</li>
            <li>Ram : 8GB</li>
            <li>Ports : 2 x LAN, 1x RS232, 1x Wesbus RJ45</li>
          </ul>
          <h4 class="subtitle-situ-pro" id="procwespci" class="mt-5">Procédure installation Wespci</h4>
          <h5 class="lasttile-situ-pro">Services et outils requis</h5>
          <ul>
            <li>Installation de Debian 8</li>
            <li>Installation des services :</li>
            <ul>
              <li>Apache 2 : Serveur HTTP (web)</li>
              <li>PHP 7</li>
              <li>MySQL + phpMyAdmin : Base de données (données « statiques » : utilisateurs, paramètres, etc…)</li>
              <li>MongoDB : Base de données (données volumineuses : appareils, statistiques, etc…)</li>
              <li>Node.js & NPM :  Application logicielle libre pour application de réseau pour lancer Wescan web </li>
              <li>.NET Core (dotnet) :</li>
              <li>Runtime et SDK : plateforme pour construire et lancer les applications Wescan</li>
            </ul>
          </ul>         
          <h5 class="lasttile-situ-pro">Installation apache + mysql (+phpMyadmin) + php</h5>
          <ul>
            <li>
              Apache 2.4<br />
              <kbd><kbd> ~$ sudo apt-get install apache2</kbd></kbd>
            </li>
            <li>
              MySQL<br />
              <kbd><kbd> ~$ sudo apt-get install mysql-server</kbd></kbd>
              <kbd><kbd> ~$ sudo mysql_secure_installation</kbd></kbd></li>
            <li>
              phpMyAdmin<br />
              <kbd><kbd> ~$ sudo apt-get install phpmyadmin</kbd></kbd>
            </li>
            <li>
              PHP 7<br />
            </li>
            <ul>
              <li>Ajout du dépôt Dotdeb :<br />
              <kbd><kbd> ~$ echo "deb http://packages.dotdeb.org jessieall" > /etc/apt/sources.list.d/dotdeb.list wget -O- https://www.dotdeb.org/dotdeb.gpg | sudo apt-key add - apt update</kbd></kbd></li>
              <li>Apt-get install php et ses modules : <br />
              <kbd><kbd> ~$ sudo apt install php7.0 libapache2-mod-php7.0 php7.0-mysql php7.0-curl php7.0-json php7.0-gd php7.0-mcrypt 
                  php7.0-msgpack php7.0-memcached php7.0-intl php7.0-sqlite3 php7.0-gmp php7.0-geoip php7.0-mbstring php7.0-xml php7.0-zip</kbd></kbd></li>
            </ul>
          </ul>
          <h5 class="lasttile-situ-pro">Installation MongoDB</h5>
          <ul>
              <li>
                Importation de la clé pour le référentiel officiel MongoDB<br />
                <kbd><kbd> ~$ sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 0C49F3730359A14518585931BC711F9BA15703C6</kbd></kbd>
              </li>

              <li>
                Ensuite, nous devons ajouter les détails du référentiel MongoDB pour qu'Apt puisse savoir où télécharger les paquets.<br />
                <kbd><kbd> ~$ sudo echo "deb http://repo.mongodb.org/apt/debian jessie/mongodb-org/3.4 main" | sudo tee /etc/apt/sources.list.d/mongodb-org-3.4.list</kbd></kbd>
              </li>
              
              <li>
                Mise à jours des paquets<br />
                <kbd><kbd> ~$ sudo apt-get update</kbd></kbd>
              </li>
              
              <li>
                Enfin installation du paquets MongoDB<br />
                <kbd><kbd> ~$ sudo apt-get install –y mongodb-org</kbd></kbd>

              </li>
              
          </ul>

          <h5 class="lasttile-situ-pro">Installation Dotnet</h5>
          <ul>
              <li>
                  Avant d’installer .NET, il faut tout d’abord enregistrer la clé Microsoft, enregistrer le référentiel du produit et les dépendances requises<br />
                <kbd><kbd>~$ sudo apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv 0C49F3730359A14518585931BC711F9BA15703C6<br />
                ~$ sudo wget -qO- https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor > microsoft.asc.gpg<br />
                ~$ sudo mv microsoft.asc.gpg /etc/apt/trusted.gpg.d/ wget -q https://packages.microsoft.com/config/debian/8/prod.list<br />
                ~$ sudo mv prod.list /etc/apt/sources.list.d/microsoft-prod.list<br />
                ~$ sudo chown root:root /etc/apt/trusted.gpg.d/microsoft.asc.gpg <br />
                ~$ sudo chown root:root /etc/apt/sources.list.d/microsoft-prod.list<br />
              </li>

              <li>
                Mise à jours des paquets<br />
                <kbd><kbd>~$ sudo apt-get update</kbd></kbd>
              </li>
              
              <li>
                  Enfin installer .NET SDK<br />
                <kbd><kbd>~$ sudo apt-get install dotnet-sdk-2.1.4</kbd></kbd>

              </li>
              
          </ul>

          <h5 class="lasttile-situ-pro">Installation Node.js & NPM</h5>
          <ul>
              <li>
                  Installation curl<br />
                <kbd><kbd>~$ sudo apt-get install curl</kbd></kbd><br />
              </li>

              <li>
                Ajouter Node.js PPA<br />
                <kbd><kbd>~$ sudo apt-get install software-properties-common<br>
                ~$ curl -sL https://deb.nodesource.com/setup_10.x | sudo bash -</kbd></kbd>
              </li>
              
              <li>
                  Installation de Node.js<br />
                <kbd><kbd>~$ sudo apt-get install nodejs</kbd></kbd>
              </li>

              <li>
                  Tester la version de Node.js et NPM pour vérifier leurs bon fonctionnements<br />
                <kbd><kbd> ~$ node -v<br>
                v.11.8.0</kbd></kbd><br>
                <kbd><kbd> ~$ npm -v<br>
                6.7.0</kbd></kbd>
              </li>
              
          </ul>
          

        </div>
        <div class="container bg-white py-3 mb-5" style="padding-bottom: 3em" id="installconfigwespci">
            <h3 class="title-situ-pro text-center"><span>Ajout de fonctionnalités ou modification de Wescan2® à la demande d’un client</span></h3>
            <h4 class="subtitle-situ-pro" id="presentation">Cahier des charges</h4>
            <h5 class="lasttile-situ-pro">Contexte</h5>
            <p>
              Dans le cadre de l'évolution et la mise en vente de la solution Wesby, de nombreux changements sont demandés pas les nouveaux clients voulant en faire l'acquisition. Les
              infrastructures de nos clients on tous leurs particularités et équipements à eux et donc une charge de travail nous ai demandés pour satisfaire l'attente du client 
              et réaliser la meilleur intégration possible à la nouvelle infrastructure.
            </p>
            <p>La modification du logiciel n'est pas obligatoires pour chaques clients car certains se suffisent aux fonctionnalités existante de notre logiciel.</p>
            <p>Je vais donc vous présentez une situation d'un client X, qui dans sa situation avaient des demandes très particulières sur la modification de Wescan2®.</p>
            <h5 class="lasttile-situ-pro">Déroulement de la validation du CDC</h5>
            <img class="rounded mx-auto d-block" width="30%" src="../images/deroulement_CDC.png" />
            <h4 class="subtitle-situ-pro">Déroulement phase de création</h4>
            <h5 class="lasttile-situ-pro"></h5>
            

        </div>
        <div class="container bg-white py-3 mb-5" style="padding-bottom: 3em" id="installconfigwespci">
            <h3 class="title-situ-pro text-center"><span>Intégration d'un nouvel équipement dans la solution</span></h3>
            <h4 class="subtitle-situ-pro" id="presentation">Cahier des charges</h4>
            <h5 class="lasttile-situ-pro">Contexte</h5>
        </div>
        <div class="container bg-white py-3 mb-5" style="padding-bottom: 3em" id="annexes">
          <h3 class="title-situ-pro text-center"><span>Annexes</span></h3>
          <a href="http://51.83.31.68/" target="_blank">Wescan2®</a>
          <h4 class="subtitle-situ-pro" id="presentation">Présentation de la solution</h4>
          <h5 class="lasttile-situ-pro">Contexte</h5>
          <p>La solution Wesby est une solution de supervision et d'action de différents équipements qui utilisent les énergies dans les bâtiments. 
            C'est un outil de suivi intelligent des consommations d'énergies qui permet de faire des suivis énergétiques et palier à des dérives de consomations ou de gaspillages.
            Cette solution s'adapte à l'installation et aux équipements qui sont déjà existant et fonctionnelles dans l'infrastructure d'un batîment.</p>
          <p>Elle permet l'enrichirissement des éléments de supervisions par une solution qui peut à la fois effectuer des alertes en cas de surconsommation 
            et qui peut donner l'opportunité aux utilisateurs d'interagir directement sur les équipements de façon à avoir un usage effectif des équipements en fonction de leurs besoins réelle.</p>
          
          <div class="row">
            <div class="col-md-6">
              <div class="ml-5">
                <img width="77%" src="../images/hardware.png" /><br>
                <h5 class="font-weight-bold">Hardware</h5>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mr-5">
                <img width="110%" src="../images/graphique.jpg" />
                <h5 class="font-weight-bold">Software</h5>
              </div>
            </div>
          </div>
          
          
          <h4 class="subtitle-situ-pro" id="wesio" class="mt-5">WESIO</h4>
          <p>Son rôle :  Gestionnaire entrées / sorties de la gamme Wesby</p>
          <p>Caractéristiques :</p>
              <ul>
                <li>Adressage max : 30 à 250 adresses selon les équipements sur le bus</li>
                <li>Alimentation : Par RJ45 POE 48VDC</li>
              </ul>
              
              
          <h4 class="subtitle-situ-pro" id="fonctwesby" class="mt-5">Fonctionnement de la solution</h4>
          <div class="row">
            <div class="col-md-6 mt-5">
              <ul>
                  <li>Wespci :  échange avec les terminaux pour superviser les équipements</li><br>
                  <li>Wesio : Contient un programme fonctionnant en Modbus permettant de voir en temps réel l’état des entrées / sorties</li><br>
                  <li>Protocole Modbus entre tous les composants :  </li><br>
                  <li>Wespci ←→ Wesio</li><br>
                  <li>Wesio←→ Equipements; capteurs; autres</li><br>
                  <li>Protocole de communication utilisé pour des réseaux d’automates programmables. Il généralise la méthode communication 
                      entre tous les appareils et est composé de trames de tableau de données modifié par le Wesio</li><br>
                
              </ul>
            </div>
            <div class="col-md-6">
                <img width="105%" src="../images/opto_22_energy_monitoring_system_in_heavy_industry.jpg" class="rounded float-right" alt="Fonctionnement solution wesby">
            </div>
          </div>
          <h4 class="subtitle-situ-pro" class="my-5">Fonctionnement des applications WESCAN</h4>
          <p class="font-italic">Schéma de fonctionnement</p>
          <img src="../images/wespci_diagram.jpg" class="rounded" />
          
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
