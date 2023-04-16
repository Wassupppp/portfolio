<?php include("php/password_protect.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="flavicon.png">

    <title>Portfolio | Ouassim Khaddioui</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body id="main" style="visibility:hidden" onload="document.getElementById('main').style.visibility = 'visible' ">

    <header>
       <?php include("menu.php") ?>
    </header>

    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h2 class="jumbotron-heading">Portfolio | BTS SIO SLAM </h2>
          <p class="lead">Bienvenue sur mon portfolio,vous trouverez sur différentes sections toutes les informations à mon sujet.</p>
          <p class="lead">2022 - 2023</p>
        
        </div>
      </section>
      <!-------<PRESENTATION>--------------------------------------------------------------->
      <div id="presentation" class="album py-5">
        <div class="container">
          <div class="row justify-content-md-center text-center">
            <div class="col-lg-12">
                <img data-aos="fade-right" class="rounded-circle" src="images/0.JPG" alt="Generic placeholder image" width="140" height="180">
                <h1 class="py-5 mt-5" data-aos="fade-right"><span>Ouassim KHADDIOUI</span></h1>
                <p class="lead"  data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Je suis actuellement en formation d'apprentissage en tant que développeur dans l'entreprise Antibia. Ce site est un portfolio qui me permet de valider mon diplôme de BTS SIO (Services Informatiques aux Organisations) avec l'option SLAM (Solutions Logicielles et Applications Métiers). Il regroupe les différents projets ou tâches professionnels et personnels que j'ai réalisés au cours de mon apprentissage en développement.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-------</PRESENTATION>--------------------------------------------------------------->

      <!-------<BTS SIO PRESENTATION>--------------------------------------------------------------->
      <div class="bg-light" id="btssio">
        <h1 class="py-5 mt-5" data-aos="fade-right"><span>BTS SIO</span></h1>
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
              <p>
                Le Brevet de Technicien Supérieur (BTS) Services Informatiques aux Organisations (SIO) s'adresse à ceux qui souhaitent se former en deux ans aux métiers d'administrateur réseau (option SISR) ou de développeur afin d'intégrer directement le marché du travail ou de poursuivre des études dans le domaine de l'informatique.
              </p>
              <p>Au sein de NEXTECH, situé dans la ville de Pertuis, ce BTS se déroule sous forme d'alternance, ce qui nous demande d'intégrer une entreprise pour être accepté. L'alternance désigne un système de formation dans lequel l'étudiant alterne entre une formation théorique dans un centre de formation pendant une semaine, puis une expérience professionnelle en entreprise la semaine suivante.
              </p>
              <div class="text-center">
                <img id="cfai84" src="images/cfai/cfai84.jpg" data-aos="fade-right"/>
              </div>
              <p data-aos="fade-up">L'option SLAM permet de suivre l'ensemble du cycle de vie des applications, comprenant les étapes suivantes :</p>
              <ul data-aos="fade-up">
                <li>Analyser les besoins des utilisateurs finaux.</li>
                <li>Rechercher et choisir une solution adaptée.</li>
                <li>Concevoir et développer des applications.</li>
                <li>Assurer la maintenance des programmes pour garantir le bon fonctionnement de ces applications.</li>
              </ul>
              <h2 id="btssio-title" data-aos="fade-right">L'examen du BTS SIO</h2>
              <table class="table table-hover" data-aos="fade-up">
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
                      <td>2h(écrit) + 20min oral</td>
                      <td>Ecrit + oral</td>
                    </tr>
                    <tr>
                      <th scope="row">Mathématiques</th>
                      <td>3</td>
                      <td>55min</td>
                      <td>Ecrit</td>
                    </tr>
                    <tr>
                      <th scope="row">Mathématiques algorithmique appliquée</th>
                      <td>3</td>
                      <td>20min</td>
                      <td>Oral</td>
                    </tr>
                    <tr>
                      <th scope="row">Culture économique, managériale et juridique pour l'informatique</th>
                      <td>3</td>
                      <td>4h</td>
                      <td>Ecrit</td>
                    </tr>
                    <tr>
                      <th scope="row">E4 Support et mise à disposition des services informatiques</th>
                      <td>4</td>
                      <td>40min</td>
                      <td>Oral</td>
                    </tr>
                    <tr>
                      <th scope="row">E5 Conception et développement d’applications (SLAM)</th>
                      <td>4</td>
                      <td>40min (1h30 préparation)</td>
                      <td>Oral</td>
                    </tr>
                    <tr>
                      <th scope="row">E6 Cybersécurité des services informatiques (SISR/SLAM)</th>
                      <td>4</td>
                      <td>4h</td>
                      <td>Ecrit</td>
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
          <h1 class="py-5 mt-5" data-aos="fade-right"><span>Maîtrises et Compétences</span></h1>
          <div class="container">
              <div class="row mx-auto">
                <div class="col-lg-4" data-aos="fade-up">
                  <h2 style="text-align:center">Languages</h2>
                  <img class="logoCompetence" src="images/logo/icons8_Developer_64.png"/>
                  
                  <div class="lead skill" >PHP
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">65 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">C++
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">45 %</div>
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
                      <div class="progress-bar bg-123" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">65 %</div>
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
                  <div class="lead skill">Symfony
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">55 %</div>
                    </div><br />
                  </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up">
                  <h2 style="text-align:center">OS & Outils</h2>
                  <img class="logoCompetence" src="images/logo/icons8_Linux_64.png"/>
                  <div class="lead skill">Linux
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">Windows
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100">80 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">MacOS
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">55 %</div>
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

                </div>
                <div class="col-lg-4" data-aos="fade-up">
                  <h2 style="text-align:center">Logiciels</h2>
                  <img class="logoCompetence" src="images/logo/icons8_Software_64.png"/>
                  <div class="lead skill">PHPStorm
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">85 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">NetBean
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">55 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">SQL Server
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100">75 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">VMware
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100">55 %</div>
                    </div><br />
                  </div>

                  <div class="lead skill">Visual Studio Code
                    <div class="progress">
                      <div class="progress-bar bg-123" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">75 %</div>
                    </div><br />
                  </div>
                </div>
              </div>
            </div> 
          <div class="container">
            <div class="row">
              <div class="col" data-aos="fade-up">
                <div class="content">
                    <a href="images/skills/htmlcolor.png">
                  <div class="content-overlay"></div>
                    <img class="content-image" src="images/skills/htmlNeew.png">
                    <div class="content-details">
                        <h3>HTML </h3>
                    </div>
                    </a>
                </div>
              </div>
              <div class="col" data-aos="fade-up">
                  <div class="content">
                      <a href="images/skills/csscolor.png">
                    <div class="content-overlay"></div>
                      <img class="content-image" src="images/skills/css3.png">
                      <div class="content-details">
                          <h3>CSS </h3>
                      </div>
                      </a>
                  </div>
              </div>
              <div class="col" data-aos="fade-up">
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
                <div class="col" data-aos="fade-up">
                    <div class="content">
                        <a href="images/skills/jquery.png">
                      <div class="content-overlay"></div>
                        <img class="content-image" src="images/skills/php.png">
                        <div class="content-details">
                            <h3>PHP </h3>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col" data-aos="fade-up">
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
              
                <div class="col" data-aos="fade-up">
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
                  <div class="col-md-4" data-aos="fade-up">
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
                  <div class="col-md-4" data-aos="fade-up">
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
                  <div class="col-md-4" data-aos="fade-up">
                    <div class="content">
                      <a href="images/skills/photoshop.png">
                        <div class="content-overlay"></div>
                        <img class="content-image" src="images/skills/symfony.png">
                        <div class="content-details">
                            <h3>Symfony</h3>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      <!-------</MAITRISE ET COMPETENCE>--------------------------------------------------------------->

      <!-------<CURSUS>--------------------------------------------------------------->
      <div id="parcours" class="bg-light">
        <h1 class="py-5" data-aos="fade-right"><span>Cursus</span></h1>
        <div id="containerCursus" class="container">
          <div class="row justify-content-around">
            <div class="col-5">
              <h2 style="text-align:left;" data-aos="fade-right">Formation</h2>
              <h2 class="lead" data-aos="fade-right">Scolaire</h2>
                <div class="row top-buffer-30" data-aos="fade-right">
                  <div class="col-md-2 box-date-cursus-left">
                      <p class="date-cursus">En cours</p>
                  </div>
                  <div class="col-md-10 box-cursus-left">
                    <h3>BTS SIO option SLAM</h3>
                    <p>NEXTECH - PERTUIS</p>
                  </div>
                </div>
                <div class="row top-buffer-30" data-aos="fade-right">
                  <div class="col-md-2 box-date-cursus-left">
                      <p class="date-cursus">2017 - 2018</p>
                  </div>
                  <div class="col-md-10 box-cursus-left">
                    <h3>Bac Technologique  <span class="font-italic cursor-help" title="Services Informatiques aux Organisations">STI2D </span></h3>
                    <p>Lycée Jean Henri-Fabre - Carpentras</p>
                  </div>
                </div>
            
                <div class="row top-buffer-30" data-aos="fade-right">
                  <div class="col-md-2 box-date-cursus-left">
                      <p class="date-cursus">2011 - 2015</p>
                  </div>
                  <div class="col-md-10 box-cursus-left">
                    <h3>Brevet des collèges</h3>
                    <p>Collège Alphonse Silve</p>
                  </div>
                </div>
            </div>
            <div class="col-5">
              <h2 style="text-align:right" data-aos="fade-left">Expérience</h2>
              <h2 class="lead display-5" style="text-align:right" data-aos="fade-left">Professionnels</h2>
              <div class="row top-buffer-30" data-aos="fade-left">
                <div class="col-md-10 box-cursus-right">
                  <h3>Antibia</h3>
                  <p>Alternance</p>
                </div>
                <div class="col-md-2 box-date-cursus-right">
                  <p class="date-cursus">En cours</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-------</CURSUS>--------------------------------------------------------------->
          <p class="d-flex justify-content-center">
              <a href="CV OUASS.pdf" class="btn btn-primary my-2" style="margin-right:5px">Visualisez CV</a>
              <a href="https://www.linkedin.com/in/ouassim-khaddioui-240445222/" class="btn btn-primary my-2" >Mon Linkedin</a>
          </p>
      <!-------<PRESENTATION ENTREPRISE>----------------------------------------------->
      <div id="presentationEntreprise">
        <h1 class="py-5 mt-5" data-aos="fade-right"><span>Presentation entreprise</span></h1>
        <div class="container">
          <h2 class="ml-5 py-5">Antibia</h2>
          <div class="row" id="presentationUnigrid" data-aos="fade-up">
            <div class="col-md-4">
              <img width="65%" src="images/logoAntibia.jpg"  class="ml-5 mt-1" />
            </div>
            <div class="col-md-8 mt-3">
              <p>
              Antibia est un éditeur de logiciels de services d'incendie et de secours qui vous propose une gamme complète de services pour gérer vos services de pompiers.              </p>
            </div>
            <div class="col-md-12">
              <h4 class="subtitle-situ-pro py-3">Activité de l'entreprise</h4>
                <ul>
                    <li>Nous proposons des solutions innovantes basées sur un progiciel composé de plus de 20 modules dédiés à la gestion administrative des services d’incendie et de secours</li>
                    <li>Nous développons une réponse technologique complète et adaptée aux besoins des services incendies et de secours</li>
                  </ul>
            </div>
          </div>
          <h2 class="ml-5 py-5" data-aos="fade-right">Caractéristique de l'entreprise</h2>
          <img width="100%" data-aos="fade-right" src="images/unigrid/antibia_carac.jpg" class="rounded mx-auto d-block" />
          <h2 class="ml-5 py-5" data-aos="fade-right">Mon activité en entreprise</h2>
          <ul data-aos="fade-right">              
            <li>Installation du logiciel MAJAUTO dans tous les SDIS et assurer sa maintenance.</li>
            <li>Maintenance du Module RH</li>
              <ul>
                <li> Correction de bugs (résolution des fiches de liaison) </li>
                <li> Développement de fonctionnalités sur demande du SDIS</li>
                <li> Conception de scripts pour faciliter l'insertion en masse.</Li>
            </ul>
          </ul>
          
          
          <div class="row">
          <h3 class="ml-5 py-5" data-aos="fade-right">Antibia</h3>
            <div class="col-md-6" data-aos="fade-right"><img width="100%" src="images/unigrid/antibia_salon.jpg" class="rounded mx-auto d-block" style="margin-top:10em" /></div>
          </div>
          <h3 class="mt-5" data-aos="fade-right">MAJAUTO</h3>
          <img src="images/majauto.png" data-aos="fade-right" width="100%" class="mb-5"/>
        </div>
      </div>
      <!-------</PRESENTATION ENTREPRISE>--------------------------------------------------------------->
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
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"></script>
    <script>window.jQuery || document.write("<script src='assets/js/vendor/jquery-slim.min.js'><\/script>")</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    
    <script src="index.js"></script>
  </body>
</html>