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
              <!--<img src="../pressbook_Screen.png" />-->
              <table class="table table-hover">
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
                    <td>14/06/2018</td>
                    <td>developpez.com</td>
                    <td>Sortie préversion .NET 4.8</td>
                    <td><a href="https://www.developpez.com/actu/209353/Microsoft-annonce-la-sortie-d-une-preversion-du-Framework-Net-4-8-la-build-3621-Early-Access-s-accompagne-d-ameliorations-pour-WinForms-WPF-et-plus/">https://www.developpez.com/actu/209353/Microsoft-annonce-la-sortie-d-une-preversion-du-Framework-Net-4-8-la-build-3621-Early-Access-s-accompagne-d-ameliorations-pour-WinForms-WPF-et-plus/</a></td>
                  </tr>
                  <tr>
                    <td>29/06/2018</td>
                    <td>cms.fr</td>
                    <td>Action menées : CMS et RGPD</td>
                    <td><a href="https://www.cms.fr/articles/865-cms-et-rgpd-quelles-actions-ont-ete-menees.html">https://www.cms.fr/articles/865-cms-et-rgpd-quelles-actions-ont-ete-menees.html</a></td>
                  </tr>
                  <tr>
                    <td>27/08/2018</td>
                    <td>lemondeinformatique.com</td>
                    <td>Qiskit : framework de calcul quantique IBM</td>
                    <td><a href="https://www.lemondeinformatique.fr/actualites/lire-qiskit-le-framework-de-calcul-quantique-open-source-d-ibm-72653.html">https://www.lemondeinformatique.fr/actualites/lire-qiskit-le-framework-de-calcul-quantique-open-source-d-ibm-72653.html</a></td>
                  </tr>
                  <tr>
                    <td>21/08/2018</td>
                    <td>developpez.com</td>
                    <td>Alternative React/Angular : Mithril</td>
                    <td><a href="https://www.developpez.com/actu/219906/Mithril-un-framework-JavaScript-moderne-simple-rapide-et-leger-compare-a-React-ou-Angular-pour-ceux-qui-privilegient-la-facilite-d-integration/">https://www.developpez.com/actu/219906/Mithril-un-framework-JavaScript-moderne-simple-rapide-et-leger-compare-a-React-ou-Angular-pour-ceux-qui-privilegient-la-facilite-d-integration/</a></td>
                  </tr>
                  <tr>
                    <td>27/08/2018</td>
                    <td>twitter.fr</td>
                    <td>Version Joomla 4.0 annoncée</td>
                    <td><a href="https://www.joomla.fr/actualites/joomla-4-0-en-version-stable-est-en-approche">https://www.joomla.fr/actualites/joomla-4-0-en-version-stable-est-en-approche</a></td>
                  </tr>
                  <tr>
                    <td>30/10/2018</td>
                    <td>developpez.com</td>
                    <td>Nouvelle version HighChart</td>
                    <td><a href="https://javascript.developpez.com/actu/231318/AnyChart-JS-8-3-0-et-8-4-0-diagrammes-de-Sankey-formateurs-de-coloration-infobulles-HTML-pour-le-framework-JavaScript-de-graphiques-oriente-HTML5/">https://javascript.developpez.com/actu/231318/AnyChart-JS-8-3-0-et-8-4-0-diagrammes-de-Sankey-formateurs-de-coloration-infobulles-HTML-pour-le-framework-JavaScript-de-graphiques-oriente-HTML5/</td>
                  </tr>
                  <tr>
                    <td>18/11/2018</td>
                    <td>developpez.com</td>
                    <td>Nouveau framework front-end : Spectre.css</td>
                    <td><a href="https://www.developpez.com/actu/233663/Spectre-css-un-framework-front-end-leger-responsive-et-moderne-est-disponible-dans-sa-version-0-5-5/">https://www.developpez.com/actu/233663/Spectre-css-un-framework-front-end-leger-responsive-et-moderne-est-disponible-dans-sa-version-0-5-5/</a></td>
                  </tr>
                  <tr>
                    <td>19/11/2018</td>
                    <td>developpez.com</td>
                    <td>Financement de Google pour FW Javascript</td>
                    <td><a href="https://www.developpez.com/actu/233807/Google-veut-financer-le-developpement-de-fonctionnalites-liees-aux-performances-dans-les-frameworks-JavaScript-a-hauteur-de-200-000-USD/">https://www.developpez.com/actu/233807/Google-veut-financer-le-developpement-de-fonctionnalites-liees-aux-performances-dans-les-frameworks-JavaScript-a-hauteur-de-200-000-USD/</a></td>
                  </tr>
                  <tr>
                    <td>07/12/2018</td>
                    <td>twitter.fr</td>
                    <td>Version Wordpress 5.0 : nouvelles fonctionnalités</td>
                    <td><a href="https://www.leptidigital.fr/wordpress/wordpress-5-0-14601/">https://www.leptidigital.fr/wordpress/wordpress-5-0-14601/</a></td>
                  </tr>
                  <tr>
                    <td>../../....</td>
                    <td>twitter.fr</td>
                    <td>Compte nouveautés vue js</td>
                    <td><a href="https://twitter.com/VueJsNews">https://twitter.com/VueJsNews</a></td>
                  </tr>
                  <tr>
                    <td>../../....</td>
                    <td>twitter.fr</td>
                    <td>Rapport hebdomadaire nouveautés Symfony</td>
                    <td><a href="https://twitter.com/symfony">https://twitter.com/symfony</a></td>
                  </tr>
                  <tr>
                    <td>05/02/2019</td>
                    <td>twitter.fr</td>
                    <td>Chiffre utilisation python 2019</td>
                    <td><a href="https://python.developpez.com/actu/249615/Python-en-2018-les-chiffres-cles-de-la-communaute-EDI-frameworks-utilisation-SGBD-ORM-tests/?utm_source=dlvr.it&utm_medium=twitter">https://python.developpez.com/actu/249615/Python-en-2018-les-chiffres-cles-de-la-communaute-EDI-frameworks-utilisation-SGBD-ORM-tests/?utm_source=dlvr.it&utm_medium=twitter</a></td>
                  </tr>
                  <tr>
                    <td>06/02/2019</td>
                    <td>programmez.fr</td>
                    <td>Nouvelle version de React</td>
                    <td><a href="https://www.programmez.com/actualites/sortie-de-react-168-avec-un-mecanisme-de-hooks-28555">https://www.programmez.com/actualites/sortie-de-react-168-avec-un-mecanisme-de-hooks-28555</a></td>
                  </tr>
                  <tr>
                    <td>07/02/2019</td>
                    <td>twitter.fr</td>
                    <td>Nouvelle fonctionnalité de push en http</td>
                    <td><a href="https://symfony.com/blog/symfony-gets-real-time-push-capabilities">https://symfony.com/blog/symfony-gets-real-time-push-capabilities</a></td>
                  </tr>
                  <tr>
                    <td>20/02/2019</td>
                    <td>programmez.fr</td>
                    <td>ML.NET framework microsoft pour le deep learning</td>
                    <td><a href="https://www.programmez.com/actualites/mlnet-le-machine-learning-pour-les-developpeurs-net-28591">https://www.programmez.com/actualites/mlnet-le-machine-learning-pour-les-developpeurs-net-28591</a></td>
                  </tr>
                  <tr>
                    <td>21/02/2019</td>
                    <td>programmez.fr</td>
                    <td>Slack propose un framework</td>
                    <td><a href="https://www.programmez.com/actualites/slack-propose-block-kit-builder-aux-developpeurs-28610">https://www.programmez.com/actualites/slack-propose-block-kit-builder-aux-developpeurs-28610</a></td>
                  </tr>
                  <tr>
                    <td>22/02/2019</td>
                    <td>programmez.fr</td>
                    <td>Fin de net core 10 et 11</td>
                    <td><a href="https://www.programmez.com/actualites/net-core-10-et-11-fin-de-vie-des-le-27-juin-28612">https://www.programmez.com/actualites/net-core-10-et-11-fin-de-vie-des-le-27-juin-28612</a></td>
                  </tr>
                  <tr>
                    <td>05/03/2019</td>
                    <td>developpez.com</td>
                    <td>Rapport des sites les plus piratés : CMS</td>
                    <td><a href="https://www.developpez.com/actu/249750/Parmi-les-sites-CMS-pirates-en-2018-90-pourcent-sont-des-sites-WordPress-et-97-pourcent-des-sites-PrestaShop-pirates-sont-obsoletes-selon-un-rapport">https://www.developpez.com/actu/249750/Parmi-les-sites-CMS-pirates-en-2018-90-pourcent-sont-des-sites-WordPress-et-97-pourcent-des-sites-PrestaShop-pirates-sont-obsoletes-selon-un-rapport</a></td>
                  </tr>
                  <tr>
                    <td>30/03/2019</td>
                    <td>presse-citron.net</td>
                    <td>Magento corrige une faille critique</td>
                    <td><a href="https://www.presse-citron.net/magento-corrige-faille-critique-mettre-jour-cms/">https://www.presse-citron.net/magento-corrige-faille-critique-mettre-jour-cms/</a></td>
                  </tr>
                  <tr>
                      <td>09/04/2019</td>
                      <td>presse-citron.net</td>
                      <td>Square officiliase une première synergie avec Weebly</td>
                      <td><a href="https://www.presse-citron.net/square-officialise-premiere-synergie-weebly/">https://www.presse-citron.net/square-officialise-premiere-synergie-weebly/</a></td>
                    </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-12">
                <a href="PressBook_Framework_CMS.xlsx" class="btn btn-primary my-2">Version xlsx !</a>
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
              <p>Google Alert permet de recevoir des notifications par mail ou flux RSS à partir d'une recherche google. Elle est difficile à organiser dans un boîte mail (nouveau mail
                à chaque notification).
              </p>
              <h5 class="lasttile-situ-pro">Extension Google chrome : Feeder</h5>
              <p>Lecteur de flux RSS sous forme d'extension google donc très simple d'usage. J'ai combiné cet outils avec Google Alert me permettant de recensser pour les articles par catégories.</p>
              <img width="20%" src="images/veille/feeder_ex.PNG" class="rounded mx-auto d-block"/>

              <h5 class="lasttile-situ-pro">Twitter</h5>
              <p>Réseau social où les entreprises de nouvelles technologies sont très présent. Je me suis abonné principalement à ces différents compte ainsi que des journaux Web. 
              </p>
              <img width="35%" src="images/veille/joomla_Twitter.PNG" class="rounded mx-auto d-block"/>
              <p>La communauté de twitter permet aussi de me guider vers certaines nouveautés en rapport à mon sujet. Par exemple avec le #CMS, comme ci-dessous me permet d'avoir certaines nouvelles informations.
                Cependant il faut avoir un avis critique de ce type d'information et demande une recherche pour crédibilisé la news.
              </p>
              <img width="80%" src="images/veille/cms_Twitter.PNG" class="rounded mx-auto d-block"/>
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
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script src="index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.2/bootstrap-table.js"></script>
  </body>
</html>
