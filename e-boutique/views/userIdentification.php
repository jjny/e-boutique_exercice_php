<div id="user_wrapper">
    <header class="pure-g" id="user_identification">
        <div class="pure-u-18-24">
            <?php 
			include_once("../controllers/connexionController.php");
			$db = new connexionController();
			if(isset($_SESSION) && isset($_SESSION["user"])){
                print('<span> Welcome '.$_SESSION["user"]["firstname"]." ".$_SESSION["user"]["lastname"]);
                print('<a href="index.php?ctrl=user&action=logout"> (Logout)</a></span>');
            } else{ ?>
                <span><a href="index.php?ctrl=user&action=login">Login</a> or
                <a href="index.php?ctrl=user&action=create">Create an Account</a></span>
            <?php } ?>
        </div>
    </header>
</div>
