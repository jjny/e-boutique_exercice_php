<?php

class userController {
    public function __construct(){
        include_once("connexionController.php");
        include_once("../models/user.php");
        $this->pdobuilder = new connexionController();
        $this->user = new user($this->pdobuilder);
    }

    public function login(){
        $page = "login";
        require("../e-boutique.php");
    }
    public function doLogin(){
        if(isset($_POST) && isset($_POST["user"]) && isset($_POST["pass"])){
            $username = $_POST["user"];
            $password =  $_POST["pass"];
            $res = $this->user->login($username,$password);
            if($res === 0){
                $error = "Wrong Login or password";
                $page = "login";
				
				header('Location: login_down.php');
				
            } else{
	
                $_SESSION["user"] = $res[0];
				
				
                header('Location: ../e-boutique.php');
            }
			
        }
		
    }
    public function logout(){
		unset($_SESSION["user"]);
        header('Location: ../e-boutique.php');
    }
    public function create(){
        $page = "createaccount";
        require("./View/default.php");
    }
    public function doCreate(){
        if(isset($_POST) 
            && isset($_POST["pseudo"]) && isset($_POST["nom"]) && isset($_POST["prenom"])
            && isset($_POST["motDePasse"]) && isset($_POST["adresse"]) && isset($_POST["codePostal"]) && isset($_POST["ville"])
            && isset($_POST["adresseMail"])){
            $user["pseudo"] = $_POST["pseudo"];
            $user["nom"] = $_POST["nom"];
            $user["prenom"] = $_POST["prenom"];
            $user["motDePasse"] = $_POST["motDePasse"];
            $user["adresse"] = $_POST["adresse"];
            $user["codePostal"] = $_POST["codePostal"];
            $user["ville"] = $_POST["ville"];
            $user["adresseMail"] = $_POST["adresseMail"];
            //$this->user->create($user);
			$this->pdobuilder->exec('INSERT INTO clients SET pseudo='.$user["pseudo"].',nom='.$user["nom"].', prenom='.$user["prenom"].',motDePasse='.$user["motDePasse"].',adresse='.$user["adresse"].',codePostal='.$user["codePostal"].',ville='.$user["ville"].',adresseMail='.$user["adresseMail"].'');
        }
        header('Location: ../e-boutique.php');
    }
}