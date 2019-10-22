<?php
class Connect{
	protected function dbconnect(){
		$bdd = new PDO("mysql:host=localhost;dbname=sesame", "nom", "mot_de_passe") or die("Not connect");
		return $bdd;
	}
}
?>
