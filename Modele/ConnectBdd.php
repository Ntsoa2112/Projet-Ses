<?php
class Connect{
  protected function dbconnect(){
    $bdd = new PDO("mysql:host=localhost;dbname=sesame", "nom_utilisateur", "mdp") or die("Not connect");
    return $bdd;
  }
}
?>
