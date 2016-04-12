
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
    <title>BabySuite - Jouets</title>

    <!-- CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <script src="assets/js/jquery-min.js"></script>
    <script src="bootstrap.min.js"></script>
</head>

<!-- Body Start
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<body data-spy="scroll" data-target=".navigation">
<?php 
include_once("../controllers/connexionController.php");
$db = new connexionController();
$datas=$db->query('SELECT * FROM articles WHERE idCategorie =2');
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
                <li><a href="../e-boutique.php#accueil">Accueil</a></li>
                <li><a href="mobilier.php">Mobiliers</a></li>
				<li><a href="panier.php">Mon panier</a></li>
                <li><a href="../e-boutique.php#compte">Mon compte</a></li>
                <li><a href="../e-boutique.php#contact">Contact</a></li>
            </ul>

        </nav>

    </header>



    <!-- Section Intro (Home)
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <section id="accueil">

        <div class="main-intro">

            <div class="main-content">

                <div class="container">
				 <h3>Inscrivez vous</h3>
                     <div class="col-md-12 col-md-offset-2 block-connexion">
               
                <div class="col-md-7">



                    <div class="contact-form">

                        <!--MESSAGE SENT SUCCESFULLY-->
                        <div id="message"></div>


                        <!--MAIN FORM-->

                        <form method="post" action="index.php?ctrl=user&action=doCreate" name="contactform" id="contactform">

                            <fieldset>

                                <div class="contact-field col-md-6 col-sm-12 col-xs-12 nplr">
                                    <input name="pseudo" type="text" id="name" placeholder="Votre pseudo* :" size="30" value="">
                                </div>

                                <div class="contact-field col-md-6 col-sm-12 col-xs-12 nplr">
                                    <input name="motDePasse" type="text" id="email" placeholder="Votre mot de passe* :" size="30" value="">
                                </div>
								
								<div class="contact-field col-md-6 col-sm-12 col-xs-12 nplr">
                                    <input name="nom" type="text" id="name" placeholder="Votre nom* :" size="30" value="">
                                </div>
								
								<div class="contact-field col-md-6 col-sm-12 col-xs-12 nplr">
                                    <input name="prenom" type="text" id="name" placeholder="Votre prénom* :" size="30" value="">
                                </div>
								
								<div class="contact-field col-md-6 col-sm-12 col-xs-12 nplr">
                                    <input name="adresseMail" type="text" id="name" placeholder="Votre e-mail* :" size="30" value="">
                                </div>
								
								<div class="contact-field col-md-6 col-sm-12 col-xs-12 nplr">
                                    <input name="adresse" type="text" id="name" placeholder="Votre adresse* :" size="30" value="">
                                </div>
								
								<div class="contact-field col-md-6 col-sm-12 col-xs-12 nplr">
                                    <input name="ville" type="text" id="name" placeholder="Votre ville* :" size="30" value="">
                                </div>
								
								<div class="contact-field col-md-6 col-sm-12 col-xs-12 nplr">
                                    <input name="codePostal" type="text" id="name" placeholder="Votre code postal* :" size="30" value="">
                                </div>

                  

                                <div class="submit-but col-md-12 col-sm-12 col-xs-12 nplr">
                                    <input type="submit" class="submit" id="submit" value="Connexion">
                                </div>

                            </fieldset>

                        </form>
                        <!--END Main form-->
                    </div>
                    <!-- END contact FORM-->


                </div>



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

<script src="../assets/js/jquery-2.1.3.js"></script>
<!-- AJAX Form Submit -->
<script src="../assets/js/contactform.js"></script>

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
