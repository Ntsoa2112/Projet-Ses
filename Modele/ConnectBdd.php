<?php
class Connect{
	protected function dbconnect(){
		$bdd = new PDO("mysql:host=localhost;dbname=sesame", "sserver", "sserver") or die("Not connect");
		return $bdd;
	}
}
?>
