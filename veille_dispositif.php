<?php 
$_GET['app'] = "true";
include("php/password_protect.php"); ?>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.2/bootstrap-table.css" rel="stylesheet">
    

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
          <h2 class="jumbotron-heading">Dispositif veille technologique</h2>
          <p class="lead">Vous trouverez ci-dessous mon dispositif et le but d'une veille technologique.</p>
        </div>
      </section>

      <div id="presentation" class="album py-5 bg-light">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!--<img src="../pressbook_Screen.png" />-->
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Site</th>
                    <th scope="col">Sujet</th>
                    <th scope="col">Lien</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Documentation Symfony</td>
                    <td>~</td>
                    <td><a href="https://symfony.com/doc/current/index.html">https://symfony.com/doc/current/index.html</a></td>
                  </tr>
                  <tr>
                    <td>Wikipédia</td>
                    <td>Symfony</td>
                    <td><a href="https://fr.wikipedia.org/wiki/Symfony">https://fr.wikipedia.org/wiki/Symfony</a></td>
                  </tr>
                  <tr>
                    <td>SensioLabs.com</td>
                    <td>L’essentiel sur Symfony</td>
                    <td><a href="https://blog.sensiolabs.com/fr/2021/12/01/symfony-6-interview-nicolas-grekas/#:~:text=La%20grande%20nouveaut%C3%A9%20de%20Symfony,les%20nouvelles%20fonctionnalit%C3%A9s%20du%20langage.">https://blog.sensiolabs.com/fr/2021/12/01/symfony-6-interview-nicolas-grekas/#:~:text=La%20grande%20nouveaut%C3%A9%20de%20Symfony,les%20nouvelles%20fonctionnalit%C3%A9s%20du%20langage.</a></td>
                  </tr>
                  <tr>
                    <td>easypartner.fr</td>
                    <td>Les nouveautés Symfony</td>
                    <td><a href="https://easypartner.fr/blog/symfony-6-quelles-sont-les-nouveautes-de-la-derniere-version/">https://easypartner.fr/blog/symfony-6-quelles-sont-les-nouveautes-de-la-derniere-version/</a></td>
                  </tr>
                  <tr>
                    <td>twitter.fr</td>
                    <td>Rapport hebdomadaire nouveautés Symfony</td>
                    <td><a href="https://twitter.com/symfony">https://twitter.com/symfony</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-12">
              <h3 class="title-situ-pro text-center"><span>Veille technologique</span></h3>
              <h4 class="subtitle-situ-pro">Définition</h4>
              <p>La veille technologique consiste à s'informer de façon systématique sur les techniques les plus récente et surtout sur leur mise à disposition commerciale.
                 C’est aussi s’informer sur une nouveauté, sur les inventions des concurrents mais aussi des nouvelles technologies dans le but d’être le meilleur.
                 Il s’agit de l’observation et de l’analyse des recherches ayant trait aux acquis scientifiques et techniques, aux produits, aux procédés de fabrication, 
                 aux matériaux et aux impacts économiques présents et futurs qu’ils engendrent.
              </p>

              <p>Elle permet en générale de :</p>
              <ul>
                <li>Suivre les évolutions techniques</li>
                <li> Dégager de nouveaux procédés ou matériaux de substitution</li>
                <li>Anticiper sur la concurrence: on peut ainsi rester à la pointe du 
                  marché en acquérant toutes les nouvelles technologies qui permettent de disposer d’un avantage concurrentiel.</li>
                <li> Diminuer les coûts de production</li>
                <li>Augmenter la qualité des produits</li>
                <li>Identifier les meilleures pratiques</li>
                <li>Eviter de prendre des décisions sur des informations obsolètes</li>
                <li>Eviter de réinventer ce qui existe déjà</li>
                <li>Augmenter nos compétences</li>
              </ul>
              <h4 class="subtitle-situ-pro">Mon dispositif de veille</h4>
              <p>Mise en oeuvre de trois méthode de veille</p>
              <div class="row">
                <div class="col-md-4">
                  <img width="75%" src="images/veille/logo-google-alerts.jpg" class="rounded mx-auto d-block"/>
                </div>
                <div class="col-md-4">
                  <img width="85%" src="images/veille/feeder.png" class="rounded mx-auto d-block"/>
                </div>
                <div class="col-md-4">
                  <img width="40%" src="images/veille/Twitter_Bird.svg.png" class="rounded mx-auto d-block"/>
                </div>
              </div>
              <h5 style="margin-top:2em" class="lasttile-situ-pro">Google Alerts</h5>
              <p>Google Alert permet de recevoir des notifications par mail ou flux RSS à partir d'une recherche google. Elle est difficile à organiser dans une boîte mail (nouveau mail
                à chaque notification).
              </p>
              <h5 class="lasttile-situ-pro">Extension Google chrome : Feeder</h5>
              <p>Lecteur de flux RSS sous forme d'extension google donc très simple d'usage. J'ai combiné cet outils avec Google Alert me permettant de recensser pour les articles par catégories.</p>
              <img width="40%" src="images/veille/feeder_ex.PNG" class="rounded mx-auto d-block"/>

              <h5 class="lasttile-situ-pro">Twitter</h5>
              <p>Réseau social où les entreprises de nouvelles technologies sont très présent. Je me suis abonné principalement à ces différents compte ainsi que des journaux Web. 
              </p>
              <img width="45%" src="images/veille/joomla_Twitter.PNG" class="rounded mx-auto d-block"/>
              
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
            <a target="_blank" href="https://www.linkedin.com/in/ouassim-khaddioui-240445222/"><img style="width:25px;height:25px"src="images/linkedin.png"></a>

            <div style="text-align: right;" class="col-md-4 offset-md-4">
                <a href="#">Back to top</a>
            </div>
          </div>
        </div>
      </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script src="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.2/bootstrap-table.js"></script>
  </body>
</html>
