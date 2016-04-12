
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Page title -->
    <title>BabySuite</title>

    <!-- CSS-->
    <link rel="stylesheet" href="views/assets/css/bootstrap.css">
    <link rel="stylesheet" href="views/assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <script src="views/assets/js/jquery-min.js"></script>
	<script src="views/assets/js/bootstrap.min.js"></script>






</head>

<!-- Body Start
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<body data-spy="scroll" data-target=".navigation">
<?php 

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
include_once("controllers/connexionController.php");
$db = new connexionController();
$datas=$db->query("SELECT * FROM articles WHERE type ='new'");

?>



<!-- Page Wrap -->
<div class="page-wrapper">


    <!-- Fixed Header & Navigation
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <header class="header-fixed">


        <div class="menu-icon">
            <div class="menu-bar top"></div>
            <div class="menu-bar "></div>
            <div class="menu-bar bottom"></div>
        </div>


        <nav class="menu-nav">
            <ul class="top-menu nop">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#nouveaux">Nouveautés</a></li>
				<li><a href="views/mobilier.php">Mobiliers</a></li>
				 <li><a href="views/jouets.php">Jouets</a></li>
				<li><a href="views/panier.php">Mon panier</a></li>
                <li><a href="#compte">Mon compte</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

        </nav>
		<?php
		if (isset($_SESSION["user"])) {
		?>	
		 <nav class="connect">
			<p>	Vous êtes connecté</p>

        </nav>
		<?php
			
		}
		?>	


    </header>
	


    <!-- Accueil -->

    <section id="accueil">

        <div class="main-intro">



            <div class="main-content">

                <div class="container">
                    <br>
                    <br>
                    <h1>
                        BabySuite <br>
                    </h1>
					 <p>
                                           ___________ <br>
                            Bébé grandit à toute allure, si bien que les jeunes parents optent de plus en plus pour des meubles évolutifs et multifonctions.
                            Ses meubles intelligents ont l'avantage de grandir avec l'enfant afin d'éviter de changer de meubles tous les ans. <br>
                            ____________
                        </p>




                </div>

            </div>

        </div>

    </section>



    <!-- Nouveautés -->


    <section id="nouveaux">

        <div class="container">


            <div class="row resume-content">

                <div class="col-md-10 col-md-offset-1 block-parcours">

                        <br>
                        <h3>Nouveautés</h3><br><br>
                       
                            </br>
                           
                           <div class="col-md-10 col-md-offset-3">
                            <div class="col-md-5">
                                <a  class="genre" href="views/mobilier.php" >	mobilier</a>
                            </div>
                            <div class="col-md-5">
                                <a  class="genre" href="views/jouets.php" >	jouets</a>
                            </div>

							 </br>
							</br>

                        </div>
                  </div>

                <div class="col-md-7 col-md-offset-1">

                    <div class="col-md-12 col-md-offset-1" id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          
                                    
								<?php
									
										
										echo "<div class='item active'>";
										echo "<div align='center'>";
										
										echo "<img src=views/".$datas[0]->imageArticle.">";
										echo "</div></div>";
								
								
									foreach($datas as $post){
										echo "<div class='item'>";
										echo "<div align='center'>";
										
										echo "<img src=views/".$post->imageArticle.">";
										echo "</div></div>";
									}
									
								?>
								

                            <a class="left carousel-control hidden-xs" href="#myCarousel" role="button" data-slide="prev">
                                <p><</p>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control hidden-xs" href="#myCarousel" role="button" data-slide="next">
                                <p>></P>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </section>

    <!-- compte-->
    <section id="compte">

        
        <div class="container">
				<?php 
			if(isset($_SESSION) && isset($_SESSION["user"])){
				?>
                <div class="col-md-8 col-md-offset-2 block-connexion">
                <h3>Deconnectez vous</h3>
                <div class="col-md-7 contact-left">



                    <div class="contact-form">

                        <!--MESSAGE SENT SUCCESFULLY-->
                        <div id="message"></div>


                        <!--MAIN FORM-->

                        <form method="post" action="views/index.php?ctrl=user&action=logout" name="contactform" id="contactform">

                            <fieldset>
                                <div class="submit-but col-md-12 col-sm-12 col-xs-12 nplr">
                                    <input type="submit" class="submit" id="submit" value="Déconnexion">
                                </div>

                            </fieldset>

                        </form>
                        <!--END Main form-->
                    </div>
                    <!-- END contact FORM-->
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>
					<br/>

                </div>

        </div>
				<?php
            } else{ ?>
			 <div class="col-md-12 col-md-offset-1 block-connexion">
                <h3>Connectez vous</h3>
                <div class="col-md-7 contact-left">



                    <div class="contact-form">

                        <!--MESSAGE SENT SUCCESFULLY-->
                        <div id="message"></div>


                        <!--MAIN FORM-->

                        <form method="post" action="views/index.php?ctrl=user&action=doLogin" name="contactform" id="contactform">

                            <fieldset>

                                <div class="contact-field col-md-6 col-sm-12 col-xs-12 nplr">
                                    <input name="user" type="text" id="name" placeholder="Votre pseudo* :" size="30" value="">
                                </div>

                                <div class="contact-field col-md-6 col-sm-12 col-xs-12 nplr">
                                    <input name="pass" type="text" id="email" placeholder="Votre mot de passe* :" size="30" value="">
                                </div>

                  

                                <div class="submit-but col-md-12 col-sm-12 col-xs-12 nplr">
                                    <input type="submit" class="submit" id="submit" value="Connexion">
                                </div>

                            </fieldset>

                        </form>
                        <!--END Main form-->
                    </div>
                    <!-- END contact FORM-->
					<div class="col-md-12 col-md-offset-1 ">
					<h3>ou</h3>
					<h3><a href="views/createUser.php">Inscrivez-vous </a></h3>
					</div>
					


                </div>

                <div class="col-md-5 contact-right">



                    <div class="contact-info">
                        <p>
						<a href="#contact">Identifiants oubliés<br>Contactez nous  </a>
                            </p>
                    </div>

                </div>



            </div>
		<?php	
		}
		?>	
                
        </div>


    </section>

    <section id="contact">

        <div class="container">




            <div class="col-md-12 col-md-offset-1 block-contact">
                <h3>N'hésitez pas à me contacter</h3>
                <div class="col-md-7 contact-left">



                    <div class="contact-form">

                        <!--MESSAGE SENT SUCCESFULLY-->
                        <div id="message"></div>


                        <!--MAIN FORM-->

                        <form method="post" action="../assets/contact.php" name="contactform" id="contactform">

                            <fieldset>

                                <div class="contact-field col-md-4 col-sm-12 col-xs-12 nplr">
                                    <input name="name" type="text" id="name" placeholder="Votre prénom* :" size="30" value="">
                                </div>

                                <div class="contact-field col-md-4 col-sm-12 col-xs-12 nplr">
                                    <input name="email" type="text" id="email" placeholder="Votre E-mail* :" size="30" value="">
                                </div>

                                <div class="contact-field col-md-4 col-sm-12 col-xs-12 nplr">
                                    <input name="subject" type="text" id="subject" placeholder="Objet* :" size="30" value="">
                                </div>

                                <div class="contact-field col-md-12 col-sm-12 col-xs-12 nplr">
                                    <textarea name="comments" cols="40" rows="5" placeholder="Message* :" id="comments"></textarea>
                                </div>

                                <div class="submit-but col-md-12 col-sm-12 col-xs-12 nplr">
                                    <input type="submit" class="submit" id="submit" value="Envoyer">
                                </div>

                            </fieldset>

                        </form>
                        <!--END Main form-->
                    </div>
                    <!-- END contact FORM-->


                </div>

                <div class="col-md-5 contact-right">



                    <div class="contact-info">
                        <h6>+ d'informations</h6>
                        <p>(+33) 6 11 91 53 93<br>
                            jminfir@gmail.com</p>
                    </div>

                </div>



            </div>



        </div>

    </section>






    <!-- Footer -->

    <footer class="footer">

        <div class="container">


            <div class="footer-copyright col-md-6">
                <p>© 2016 Minfir Jennifer.</p>
            </div>



        </div>

    </footer>



</div>
<!--end page-wrapper-->

<!-- JAVASCRIPTS=========== -->

<script src="views/assets/js/jquery-2.1.3.js"></script>
<!-- AJAX Form Submit -->
<script src="views/assets/js/contactform.js"></script>

<script type="text/javascript" >


    $('.menu-icon').click(function() {
        $(this).toggleClass('menu-icon-clicked');
        $('.menu-nav').toggleClass('menu-nav-open');
    });




</script>

<script>


</script>

</body>
</html>
