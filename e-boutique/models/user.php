<?php
class User {	

	private $db;

	 public function __construct($pdobuilder){
        $this->db = $pdobuilder->connexion();
    }
    public function login($pseudo,$password){
		
        $req = $this->db->prepare('SELECT *
                                   FROM clients
                                   WHERE pseudo =?
                                   AND motDePasse =?');
        $req->execute(array($pseudo,$password));
        $count = $req->rowCount();
        if($count === 0){
            return 0;
        }
        return $req->fetchAll();
    }
}