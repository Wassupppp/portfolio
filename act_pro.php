
<?php include("php/password_protect.php"); ?>
<!--<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="flavicon.png">

    <title>Portfolio | Ouassim Khaddioui</title>

   
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link href="album.css" rel="stylesheet">
    <style>kbd{display: block;}</style>
  </head>

  <body>

    <header>
        <?php include("menu.php") ?>
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
          <h5 class="lasttile-situ-pro">L’expression des besoins</h5>
          <p>
            L'activité du commerce SystemeBox se découpe en 3 parties : la vente direct (accessoires, matériels informatiques, etc..); les interventions 
            chez des professionnels et enfin la prise en charge de réparation d'appareils de nos clients.
          </p>
          <p>
            L'accueil d'un client demandant une prise en charge de son appareil, tels que des ordinateurs, tablettes, imprimantes, etc.. se décomposent en plusieurs étapes :
          </p>
          <ul>
            <li><span class="font-weight-bold">Accueil du client</span> : cela consiste à poser les bonnes questions pour comprendre rapidement le problèmes ou ce que le client attends de nos services.</li>
            <li><span class="font-weight-bold">Diagnostique rapide</span> des problèmes que la personne subie avec son terminal, il faut continuer à poser les questions pour avoir toutes les informations nécessaires : 
              Conditions lorsque le problème apparait, Constater l'état et l'age de l'appareil, Demander de qu'elle manière le client utilise son ordinateur (tout les jours / une fois
              par mois..).
              <div class="row mt-3 mb-3">
                <div class="col">
                    <img width="100%" src="images/interieur_pc.jpg" class="rounded float-right" alt="...">
                </div>
                <div class="col">
                    <img width="100%" src="images/pieds_pc.jpg" class="rounded" alt="...">
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
              <img src="images/icons8-hdd-64.png" class="rounded ml-5" alt="..." ><img  src="images/icons8-voltage-64.png" class="rounded" alt="..." ><img src="images/icons8-laptop-64.png" class="rounded" alt="..." >
              <img src="images/icons8-usb-connector-64.png" class="rounded" alt="..." ><img  src="images/icons8-software-installer-64.png" class="rounded" alt="..." ><img src="images/icons8-operating-system-64.png" class="rounded" alt="..." >
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
          <h4 class="subtitle-situ-pro" id="cahiercharges" class="mt-5">Le cahier des charges</h4>
          <h5 class="lasttile-situ-pro">L’expression des besoins</h5>
          <p>
            Mon Maître d'apprentissage souhaite agrandir sa clientèle et présenter ses services et son activité dans les différents 
            domaines dont elle fait partie.
            Le site web doit aussi permettre un accès client, qui donne accès aux détails des ses interventions (fiche d'intervention). 
            Les fiches d'interventions sont stockés dans l'application SynchroTeam et un accès prévu ça cet effet est existant. Le site
            doit comporter diverses catégories :
            <ul>
              <li>Présentation de la société</li>
              <li>Présentation de nos services</li>
              <li>Présentation de ESET (anti-virus partenaire)</li>
              <li>Contact</li>
            </ul>
          </p>
          <h5 class="lasttile-situ-pro">Objectifs</h5>
          <ul>
            <li>Le site web est un outil de communication très important dans une entreprise et
                permet de regrouper les informations de l'entreprises à de nouveaux clients particulier ou professionnel. Travaillant
                dans le milieu de l'informatique, ce site nous donne une légitimité et le site internet est le minimum en tant que professionnel
                de l'informatique. </li>
            <li>Le second objectif est l'accès aux fiches d'interventions pour les clients. Ceci est dans la voie dans notre
              objectif de rendre les fiches d'interventions entièrement numérique.
            </li>
            <li>Enfin, le dernier objectif est de donner l'accès au client de faire l'achat ou une extension d'abonnement d'une licence
              ESET. Cela nous enlève une grosse charges de clients qui se déplacent pour cela tout en gardant la comission que ESET nous verse
              en tant que revendeur.
            </li>
          </ul>
          <h5 class="lasttitle-situ-pro">Choix technique</h5>
          <h6>CMS ou site classique?</h6>
          <p>
            J'ai du faire le choix de technologie que j'allais mettre en place pour ce site WEB. J'ai choisi le <span class="font-weight-bold">CMS</span>
          pour deux points principaux :
          </p>
          <ul>
            <li>Donner à mon MA la possibilité de changer le contenu du site web sans aucune connaissance en développement Web.</li>
            <li>
              Gain de temps : Une contrainte de temps d'une journée par semaine m'a poussé à faire ce choix. L'intégration d'un template (donc le design), 
              les extensions pour certaines fonctionnalités, la sauvegarde m'enlève un gros temps de travail sur la création du site web.
            </li>
          </ul>
          <h6>Comparatifs de 5 CMS correspondant à nos besoins</h6>

          <table class="table table-striped cms-comparatif">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Joomla</th>
                  <th scope="col">Drupal</th>
                  <th scope="col">Wordpress</th>
                  <th scope="col">Spip</th>
                  <th scope="col">Typo3</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Prix</th>
                  <td>Gratuit</td>
                  <td>Gratuit</td>
                  <td>Gratuit</td>
                  <td>Gratuit</td>
                  <td>Gratuit</td>
                </tr>
                <tr>
                  <th scope="row">Langage</th>
                  <td>PHP</td>
                  <td>PHP</td>
                  <td>PHP</td>
                  <td>PHP</td>
                  <td>PHP</td>
                </tr>
                <tr>
                    <th scope="row">Avantages</th>
                    <td>Rapide et simple à mettre en place, nombreux modules et templates, communauté très importante</td>
                    <td>Léger, facile à prendre en main, modulable.</td>
                    <td>Populaire, et donc disposant une large communauté, sobre et efficace dans sa version de base, facile à utiliser</td>
                    <td>Extensions performantes, simple d'utilisation, langage personnalisablé souple.</td>
                    <td>Créations d'espaces de travail, gestion de plusieurs sites sur la même plateforme.</td>
                </tr>
                <tr>
                    <th scope="row">Inconvénients</th>
                    <td>Nécessite un peu de temps pour se sentir à l'aide avec le panel d'administration, la gestion des utilisateurs n'est pas assez précise, système lourd et complexe.</td>
                    <td>Configuration avancée assez complexe, absence de certaines fonctionnalités essentielles.</td>
                    <td>Limité au bloging dans sa version de base, aspect communautaire (forum, messagerie privée) inexistant, beaucoup de piratage à cause de sa popularitée et de son code commun (comme beaucoup de CMS).</td>
                    <td>Langage SPIP à connaitre, extensions pas assez nombreuses et complètes.</td>
                    <td>Nécessite un certain temps d'adaptation, peut être difficile d'afficher du contenu dynamiquement sur les pages.</td>
                </tr>
              </tbody>
            </table>
            <h6>Choix</h6>
          <p>
            Notre choix s'est porté sur <span class="font-weight-bold">Joomla!</span>, un système de gestion de contenu libre, open source et gratuit. Sa force réside essentiellement
            dans sa simplicité d'utilisation et sa grande communauté de développeurs qui contribue à faire évoluer de jours en jours ce système. 
            De plus mon MA à déjà utilisé Joomla pour créer d'autres sites ce qui pousse me pousse à choisir ce CMS.
            <p>
      </div>
      <div class="container bg-white py-3 mb-5" style="padding-bottom: 3em">
          <h3 class="title-situ-pro text-center">Installation logiciel de gestion MJC (Windows Server)</h3>
          <h4 class="lasttile-situ-pro">Documentation associée</h4>
          <ul>
            <li><a href="doc/prise_en_main_2014.pdf">Manuel de prise en main de Noethys</a></li>
            <li><a href="doc/installation_tse_noethys.pdf">Installer et paramétrer Noethys en TSE</a></li>
          </ul>
         
          <h4 class="subtitle-situ-pro" class="mt-5">Le cahier des charges</h4>
          <h5 class="lasttile-situ-pro">L’expression des besoins</h5>
          <p>
            Le directeur de la Maison des Jeunes de la Culture (MJC) de la ville de Monteux souhaite mettre en place un logiciel de gestion pour l'activité de son organisation.
            Il a fait plusieurs recherche sur les logiciels que proposent internet pour ses besoins. Suite à cela il a retenu le logiciel libre et gratuit "Noethys" qui englobent
            bien toutes ses exigences. Ce logiciel requiert un serveur SQL et nous avons choisi d'installer le logiciel sur un Windows Server 2012 R2 pour permettre au directeur
            de s'y connecter à distance (Serveur TSE) ce qui permet de séparer le démarrage du logiciel avec son poste de travail.
          </p>
          <h5 class="lasttile-situ-pro">Objectifs</h5>
          <ul>
            <li>Installer Windows Serveur 2012 R2 sur une machine virtuelle avec HyperV</li>
            <li>Installer et paramétrer Noethys en TSE</li>
            <li>Installer le serveur SQL permettant le fonctionnement de Noethys</li>
          </ul>
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
            <img class="rounded mx-auto d-block" width="30%" src="images/deroulement_CDC.png" />
            <h5 class="lasttile-situ-pro">Déroulement phase de création</h5>
            <p>
              Développement de l'interface Homme - Machine (IHM) avec le framework JavaScript "Vue.Js". Le développement d'une nouvelle fonctionnalité se découpe en
              trois parties :
            </p>
            <ul>
              <li>La phase de design, qui consiste à former l'affichage et les composants du logiciel qui offre à l'utilisateur d'utiliser la fonctionnalité demandée. </li>
              <li>
                La seconde phase consiste à développer la fonction pour la rendre fonctionnel. Nous travaillons donc sur le Back-End pour par exemple récupérer des informations,
                intéragir sur les équipements ou simplement sauvegarder des préférences ou choix.
              </li>
              <li>Phase de test de la fonctionnalité, qui consiste à tester la nouvelle fonctionnalité une fois fini. Nous utilisons la fonctionnalité comme un utilisateur lambda et 
                repensons les choix si nous découvrons un problème d'utilisation ou d'ergonomie.
              </li>
            </ul>
            <p>Le développement est dirigé par LEMAITRE.D, mais nous travaillons continuellement ensemble sur la conception des modifications de l'interface Web et du Back-End</p>
            <p>Nous travaillons sur un seveur dédié virtuel (VPS) connecté au showroom de l'entreprise fonctionnant donc pas en local mais seulement grâce à une connexion internet les données et 
            relevés sont stocker sur celui-ci</p>
            <div class="row">
                <div class="col-md-4">
                  <img width="40%" src="images/ftp.png" class="rounded mx-auto d-block" />
                </div>
                <div class="col-md-4">
                  <img width="40%" src="images/unigrid/vu.png" class="rounded mx-auto d-block" />
                </div>
                <div class="col-md-4">
                  <img width="80%" src="images/HTML5_CSS_JavaScript.png" class="rounded mx-auto d-block" />
                </div>
            </div>
            <h5 class="lasttile-situ-pro">Analyse des choix et définition des tâches (Cas concret)</h5>
            <p>Une fois avoir englobé le besoin du client nous réalisons étapes de réalisations. Ici dans notre cas, après avoir pris en compte les besoins du client, nous avons créés les tâches suivante :</p>
            <ul>
              <li>Créer un plan de niveaux qui regroupe tout les plans de masse et montre les différentes pièces et niveaux du bâtiment</li>
              <li> Créer une interface dynamique et optimisé qui redirige vers une page complète lors d’un clic sur un appareil pour voir ses informations</li>
              <li>Affichage des différentes données et information sur l’appareil sélectionné</li>
              <li>Voir différents état pour gérer la maintenance de l’appareil (selon appareils) : ici notre client souhaite intégré des climatisations et gérer l’état du filtre; température ambiante et intérieur de consigne; Etat des unités intérieures; etc..</li>
              <li>Refaire le tableau de bord avec une synthèse globale de la consommation sur les différents mois et pouvoir associer différents équipements pour obtenir le total des consommations de ces équipements</li>
              <li>Créer notification par mail ou par sms paramétrable depuis la gestion des alertes permettant en cas de franchissement de seuil ou de dysfonctionnement de pouvoir alerte le responsable par mail ou sms.</li>
              <li>Affichage d’un symbole d’avertissement près de l’icone correspondant en cas dysfonctionnement ou franchissement de seuil de consommation ou de relevés pour un capteur</li>
            </ul>
              
              
              
              

            

            <h5 class="lasttile-situ-pro"></h5>
            

        </div>
        <div class="container bg-white py-3 mb-5" style="padding-bottom: 3em" id="installconfigwespci">
            <h3 class="title-situ-pro text-center"><span>Intégration d'un nouvel équipement dans la solution</span></h3>
            <h4 class="subtitle-situ-pro" id="presentation">Cahier des charges</h4>
            <h5 class="lasttile-situ-pro">Contexte</h5>
            <p>
            Dans le cadre de l'intégration de notre solutions chez un nouveau client, nous lui demandons de nous répertorier
            l'intégralité des équipements que compose son batîment. Ces terminaux seront alors intégré dans notre application, 
            permettant au client de les consulter depuis le plan de masse et effectuer leurs suppervision.
            </p>
            <h5 class="lasttile-situ-pro">Expression des besoins</h5>
            <p>
            Nous devons analyser les méthodes de communication ainsi que les registres et spécificité de chaque appareils
            pour permettre la meilleur échange entre les appareils et notre solution. Chaque appareils sont différents les 
            uns des autres, nous devons alors faire un travail d'analyse de chaque appareils et comprendre leurs registres.
            </p>
            <h5 class="lasttile-situ-pro">Analyse des équipements</h5>
            <p class="font-weight-italic">Dans le cas où nous possédons l'équipement</p>
            <h6>Analyse des registres</h6>
            <p>Le <a href="">protocole Modbus</a> permet de communiquer facilement
              avec le terminal en question et enregistre chaques données dans un sortes de tableau indexé
              par des adresses (ceci est le registre).</p>
            <a href="doc/notice_wesio.pdf" target="_blank">Exemple table de registre d'un capteur</a>

            <h6>Installation de l'équipement sur banc test</h6>
            <p>
              Cette étape nous permet de commencer le test de communication avec l'appareil et
              visualiser les données que nous utiliserons ensuite dans notre solution. Nous installons et alimentons le terminal sur le banc test.
              Puis nous branchons en cable USB et lisons les données à l'aide d'un utilitaire "Radzio! Modbus Master Simulator".
            </p>  
            <img src="images/unigrid/modbus.png" class="rounded mx-auto d-block" />
            <img src="images/unigrid/tongdy.jpg" class="rounded mx-auto d-block" />

            <h6>Branchement sur un Wesio</h6>
            <p>La dernière étape consiste à connecter le nouvel équipement sur le wesio de l'installation du showroom. Nous testons ensuiste sur notre programme la connectivité avec celui-ci et essayons d'effectuer
              des actions ou recevoir des mesures depuis notre programme back-end.
            </p>
            <img width="70%" src="images/unigrid/showroom.jpg" class="rounded mx-auto d-block" />
        </div>
        <div class="container bg-white py-3 mb-5" style="padding-bottom: 3em" id="installconfigwespci">
          <h3 class="title-situ-pro text-center"><span>Salon SmartCity : Stand de présentation de la solution</span></h3>
          <p>Les forums smart city by la tribune s'attachent à réfléchir aux nouveaux modèles économiques, aux nouvelles pratiques, aux mutations 
            des relations entre les différents acteurs publics et privés dans les territoires, aux enjeux qu'implique la transformation urbaine, à l'impact de la révolution
             digitale sur la ville. Des forums de références qui se veulent les lieux de rencontres uniques entre entrepreneurs, ingénieurs, décideurs, intellectuels, 
             responsables politiques et la nouvelle génération</p>
          <img width="80%" src="images/unigrid/IMG_20180928_122819.jpg" class="rounded mx-auto d-block" />
          <img width="80%" src="images/unigrid/smartcity1.jpg" class="rounded mx-auto d-block" />
          <img width="50%" src="images/unigrid/smartcity2.jpg" class="rounded mx-auto d-block mt-5" />

        </div>
        <div class="container bg-white py-3 mb-5" style="padding-bottom: 3em" id="annexes">
          <h3 class="title-situ-pro text-center"><span>Annexes</span></h3>
          <ul>
            <li><a href="http://51.83.31.68/" target="_blank">Wescan2®</a></li>
            <li><a href="images/unigrid/wescan.mp4" target="_blank">Vidéo présentation Wescan</a></li>
            <li><a href="doc/cahierCharges.pptx" target="_blank">Cahier des charges</a></li>
            <li><a id="modbus" href="Protocole_Modbus.pdf" target="_blank">Protocole Modbus</a></li>
          </ul>
                    
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
                <img width="77%" src="images/hardware.png" /><br>
                <h5 class="font-weight-bold">Hardware</h5>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mr-5">
                <img width="110%" src="images/graphique.jpg" />
                <h5 class="font-weight-bold">Software</h5>
              </div>
            </div>
          </div>
                   
          <h5 class="lasttile-situ-pro" id="wesio" class="mt-5">WESIO</h5>
          <a href="doc/notice_wesio.pdf">Notice WESIO</a>
          <p>Son rôle :  Gestionnaire entrées / sorties de la gamme Wesby</p>
          <p>Caractéristiques :</p>
              <ul>
                <li>Adressage max : 30 à 250 adresses selon les équipements sur le bus</li>
                <li>Alimentation : Par RJ45 POE 48VDC</li>
              </ul>
              
              
          <h5 class="lasttile-situ-pro" id="fonctwesby" class="mt-5">Fonctionnement de la solution</h5>
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
                <img width="105%" src="images/opto_22_energy_monitoring_system_in_heavy_industry.jpg" class="rounded float-right" alt="Fonctionnement solution wesby">
            </div>
          </div>
          <h5 class="lasttile-situ-pro mt-5">Fonctionnement des applications WESCAN</h5>
          <p class="font-italic">Schéma de fonctionnement</p>
          <img src="images/wespci_diagram.jpg" class="rounded mx-auto d-block" />

          <h5 class="lasttile-situ-pro mt-5">Plan de masse</h5>
          <img src="images/unigrid/maquette_Wescan.PNG" class="rounded mx-auto d-block" />

          <h5 class="lasttile-situ-pro mt-5">Vidéo présentation WESCAN</h5>
          <video controls style="width: 100%">
            <source src="images/unigrid/wescan.mp4" type="video/mp4">
            <p>Votre navigateur ne prend pas en charge les vidéos HTML5.
              Voici <a href="images/unigrid/wescan.mp4">un lien pour télécharger la vidéo</a>.</p>
          </video>
          <h5 class="lasttile-situ-pro mt-5">Technologies utilisés</h5>
          <div class="row">
              <div class="col-md-6">
                <img width="30%" style="margin: 5em" src="images/unigrid/csharp.png" />
                <p class="font-weight-italic" style="margin-top:2em;margin-left:1em">Programme Wescan serveur et client</p>
              </div>
              <div class="col-md-6 mt-2">
                <img width="25%" src="images/unigrid/vu.png" />
                <p style="font-size:40px;margin-left:3em">+</p>
                <img width="40%" src="images/unigrid/nodejs-new-pantone-black2_0.png" class="ml-5" />
                <p class="font-weight-italic">Programme Wescan serveur et client</p>
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


  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>
              -->