<?php
class connexionController{
	
	private $pdo;

    public function __construct(){
		$this->db_name = "e-boutique";
		$this->db_user = "root";
	    $this->db_pass = "";
		$this->db_host = "localhost";
    }
	
    public function connexion(){	
		try
		{
			if($this->pdo===null){
				$pdo=new PDO('mysql:dbname=e-boutique;host=localhost','root','');
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->pdo=$pdo;
			}				
			return $pdo;
		}
		catch(PDOException $e)
		{
			 echo $e->getMessage();
		}
    }
	
	public function query($statement){
		$req=$this->connexion()->query($statement);
		$datas=$req->fetchAll(PDO::FETCH_OBJ);
		return $datas;
	}
	
	public function prepare($statement,$attributes){
		$req=$this->connexion()->prepare($statement);
		$req->execute($attributes);
		$datas=$req->fetchAll(PDO::FETCH_OBJ);
		return $datas;
		
	}
	
	public function rowCount($statement){
		$count = $statement->rowCount();
		return $count;
	}
	 public function exec($statement){
		 $req=$this->connexion()->prepare($statement);
		$req->execute();
		 
		 
	 }
	
	

}