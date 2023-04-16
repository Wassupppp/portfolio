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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>

    <header>
        <?php include("menu.php") ?>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h2 class="jumbotron-heading">Contact</h2>
          <p class="lead">Cette page vous permettras de me contacter.</p>
        </div>
      </section>

      <div id="presentation" class="album bg-light">
        <h1 class="py-5"><span>Contactez-moi</span></h1>
        <div class="container">
            <!-- Grid row -->
            <div class="row">
          
              <!-- Grid column -->
              <div class="col-lg-5 mb-lg-0 mb-4">
                <!-- Form with header -->
                <div class="card">
                  <div class="card-body">
                    <!-- Header -->
                    <div class="form-header blue accent-1">
                      <h3 class="mt-2"><i class="fa fa-envelope"></i> Contact:</h3>
                    </div>
                    <p class="dark-grey-text">Je vous répondrez dans les plus bref délais</p>
                    <!-- Body -->
                    <form method="POST">
                        <div class="md-form">
                          <i class="fa fa-user prefix grey-text">
                            <label for="form-name" >Votre nom</label>
                          </i>
                          <input type="text" id="form-name" class="form-control" name="nom" placeholder="Entrez votre nom" value="<?php if(isset($_POST['nom'])){echo $_POST['nom'];} ?>" required>
                        </div>
                        <div class="md-form">
                          <i class="fa fa-envelope prefix grey-text">
                              <label for="form-email">Votre e-mail</label>
                          </i>
                          <input type="text" id="form-email" class="form-control" name="email" placeholder="Entrez votre email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" required>
                        </div>
                        <div class="md-form">
                          <i class="fa fa-tag prefix grey-text">
                            <label for="form-Subject">Objet</label>
                          </i>
                          <input type="text" id="form-Subject" class="form-control" name="objet" placeholder="Entrez l'objet de votre demande" value="<?php if(isset($_POST['objet'])){echo $_POST['objet'];} ?>" required>
                        </div>
                        <div class="md-form">
                          <i class="fas fa-pencil-alt">
                            <label for="form-text">Message</label>
                          </i>
                          <textarea type="text" id="form-text" class="form-control md-textarea" name="message" rows="3" placeholder="Entrez votre message" value="<?php if(isset($_POST['message'])){echo $_POST['message'];} ?>" required ></textarea>
                        </div>
                        <div class="text-center">
                          <input type="hidden" name="validation" value="oui" >
                          <button class="btn btn-light-blue">Envoyer</button>
                        </div>
                      </form>
                  </div>
                 
                </div>
                <!-- Form with header -->
              </div>
              <!-- Grid column -->
          
              <!-- Grid column -->
              <div class="col-lg-7">
          
                <!--Google map-->
                <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d183863.34784407742!2d4.693168943781319!3d43.94147143510599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b5eb8739bc9d07%3A0xe6429b6efa1d7b36!2sAvignon!5e0!3m2!1sfr!2sfr!4v1544545127070" 
                  frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!-- Buttons-->
                <div id="info-section" class="row text-center">
                  <div class="col-md-4">
                    <a class="btn-floating blue accent-1">
                      <i class="fas fa-map-marked-alt info-ico"></i>
                    </a>
                    <p>Avignon 84000, <br/>France</p>
                    <p class="mb-md-0"></p>
                  </div>
                  <div class="col-md-4">
                    <a class="btn-floating blue accent-1">
                      <i class="fa fa-phone info-ico"></i>
                    </a>
                    <p>+ 06 xx xx xx xx</p>
                  </div>
                  <div class="col-md-4">
                    <a class="btn-floating blue accent-1">
                      <i class="fa fa-envelope info-ico"></i>
                    </a>
                    <p>ouassim.khaddioui@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <?php
						if (isset($_POST['validation'])) {
							$entete  = 'MIME-Version: 1.0' . "\r\n";
							$entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
							$entete .= 'From: ' . $_POST['email'] . "\r\n";
							$entete .= 'Reply-to: ' . $_POST['email'];

							$message = '<h1>Message envoyé depuis le portfolio - Khaddioui Ouassim</h1><p>';
							$message_retour = '<b>Email : </b>' . $_POST['email'] . '<br>
							<b>Nom : </b>' . $_POST['nom'] . '<br>
							<b>Objet : </b>' . $_POST['objet'] . '<br>
							<b>Message : </b>' . htmlspecialchars($_POST['message']) ;
							$message = $message . $message_retour . '</p>' ;

							$retour = mail('ouassim.postbac@gmail.com', 'Envoi depuis page Contact', $message, $entete);
							if($retour)
								echo '<div class="card m-3 alert-success" role="alert" >
                <p class="card-text m-3">Merci pour votre message ! Nous avons bien reçu votre demande et nous y répondrons dans les plus brefs délais.</p>
                </div>';

						}
						?>

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script src="index.js"></script>

  </body>
</html>
