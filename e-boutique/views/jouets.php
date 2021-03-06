
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

        <div class="overlay"></div>


    </header>



    <!-- Section Intro (Home)
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <section id="accueil">

        <div class="main-intro">

            <div class="main-content">

                <div class="container">
                    <br>
                    <br>
                    <br>
                    <br>

                    <h1 class="jouet">
                        Jouets <br>
                    </h1>
					
						<?php
								foreach($datas as $post){
									
									echo "<table class='col-md-12 categorie'>";
									echo "<tr><td colspan='3'>".$post->nomArticle.'</td></tr>';
									echo "<tr>";
									echo "<td>Description :<br/><br/>".$post->descriptionArticle."</td>";
									echo "<td rowspan='2'><img src=".$post->imageArticle."></td>";
									echo "</tr>";
									echo "<tr><td>".$post->prixArticle.'  Euros</td></tr>';
									echo "<tr><td colspan='3' class='ajout'><a  href='panier.php?action=ajout&amp;l=".$post->nomArticle."&amp;q=1&amp;p=".$post->prixArticle."' onclick=\"window.open(this.href, '', 
'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;\">Ajouter au panier</a></td></tr>";
									echo "</table>";
									
									
								}		
							?>




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
