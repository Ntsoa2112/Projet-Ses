<?php
class Connect{
	protected function dbconnect(){
		$bdd = new PDO("mysql:host=localhost;dbname=sesame", "nom", "mdp") or die("Not connect");
		return $bdd;
	}
}
?>
