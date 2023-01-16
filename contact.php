<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title> Portfolio - BTS SIO </title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link href="contact.css" rel="stylesheet"> <!-- A VOIR SI JE GARDE -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body>
            <?php include ("menu.php");?>
            
            <div class='div_test'>
                <div id='image_bts'></div>
            </div>

            <section class="ftco-section">
		        <div class="container">
			        <div class="row justify-content-center">
				        <div class="col-md-6 text-center mb-5">
					        <h2 class="heading-section">Formulaire de Contact</h2>
				        </div>
			        </div>
			        <div class="row justify-content-center">
				        <div class="col-lg-10 col-md-12">
					        <div class="wrapper">
						        <div class="row no-gutters">
							        <div class="col-md-7 d-flex align-items-stretch">
								        <div class="contact-wrap w-100 p-md-5 p-4">
									        <h3 class="mb-4">Renseigner</h3>
									        <div id="form-message-warning" class="mb-4"></div> 
				      		                <div id="form-message-success" class="mb-4">
				                                Le message a bien était envoyé, merci !
				      		                </div>
									        <form method="POST" id="contactForm" name="contactForm">
										        <div class="row">
											        <div class="col-md-6">
												        <div class="form-group">
													        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
												        </div>
											        </div>
											        <div class="col-md-6"> 
												        <div class="form-group">
													        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
												        </div>
											        </div>
											        <div class="col-md-12">
												        <div class="form-group">
													        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												        </div>
											        </div>
											        <div class="col-md-12">
												        <div class="form-group">
													        <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
												        </div>
											        </div>
											        <div class="col-md-12">
												        <div class="form-group">
													        <input type="submit" value="Send Message" class="btn btn-primary">
													        <div class="submitting"></div>
												        </div>
											        </div>
										        </div>
									        </form>
								        </div>
							        </div>
							        <div class="col-md-5 d-flex align-items-stretch">
								        <div class="info-wrap bg-primary w-100 p-lg-5 p-4">
									        <h3 class="mb-4 mt-md-4">Mon contact   <i style="font-size:24px" class="fa">&#xf1ae;</i></h3>
				        	                <div class="dbox w-100 d-flex align-items-start">
				        		                <div class="icon d-flex align-items-center justify-content-center">
				        			                <span class="fa fa-map-marker"></span>
				        		                </div>
				        		                <div class="text pl-3">
					                                <p><span>Address:</span> 252 Rue Nextech, 90000 PERTUIS</p>
					                            </div>
				                            </div>
				        	                <div class="dbox w-100 d-flex align-items-center">
				        		                <div class="icon d-flex align-items-center justify-content-center">
				        			                <span class="fa fa-phone"></span>
				        		                </div>
				        		                <div class="text pl-3">
					                                <p><span>Phone:</span> <a href="tel://1234567920">+ 0775852696</a></p>
					                            </div>
				                            </div>
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-paper-plane"></span>
                                                </div>
                                                <div class="text pl-3">
                                                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">ouassim.postbac@gmail.com</a></p>
                                                </div>
                                            </div>
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-globe"></span>
                                                </div>
                                                <div class="text pl-3">
                                                    <p><span>Website</span> <a href="#">wassupolio.com</a></p>
                                                </div>
                                            </div>
			                            </div>
							        </div>
						        </div>
					        </div>
				        </div>
			        </div>
		        </div>
	        </section>

            <script src="js/jquery.min.js"></script>
            <script src="js/popper.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.validate.min.js"></script>
            <script src="js/main.js"></script>

            <?php include ("footer.php");?>
        </body>    
    </html>