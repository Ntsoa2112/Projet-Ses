<?php
  //require_once("../Modele/Model.php");
class Connect{
	protected function dbconnect(){
		$bdd = new PDO("mysql:host=localhost;dbname=sesame", "sserver", "sserver") or die("Not connect");
		return $bdd;
	}
}
class Query_bdd extends Connect{
	public function inscription($nom, $prenom, $mail, $mention, $dortoir, $passwd_hash){
		$bdd = $this->dbconnect();
		$inscription_insert = $bdd->prepare("INSERT INTO ETUDIANT(nom, prenom, mail, mention, dortoir, mdp) VALUES(?, ?, ?, ?, ?, ?)");
		$inscription_insert->execute(array($nom, $prenom, $mail, $mention, $dortoir, $passwd_hash));
		return $inscription_insert;
}

  if(!empty($_GET["action"])){
    $action = htmlspecialchars($_GET["action"]);
    if($action == "rendre"){
      header("location:../View/rendre.php");
    }
    elseif($action == "emprunter"){
      header("location:../View/emprunter.php");
    }
    elseif($action == "doleance"){
      header("location:../View/doleance.php");
    }
    elseif($action == "inscription"){
      if(isset($_POST["inscrire"])){
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["email"];
        $mention = $_POST["mention"];
        $dortoir = $_POST["dortoir"];
        $mdp1 = $_POST["mdp1"];
        $mdp2 = $_POST["mdp2"];
        if(preg_match("#^[a-z0-9._-]+p20.ap+[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$mail)){
          if($mdp1 == $mdp2){
            $salt1 = "qsq@";
            $salt2 = "z74wx1!";
            $passwd_hash = hash("sha512",$salt1.$mdp1.$salt2);
            $query_bdd = new Query_bdd;
            $inscription = $query_bdd->inscription($nom, $prenom, $mail, $mention, $dortoir, $passwd_hash);
            if($inscription === false){
              echo "Erreur de l'inscription";
            }
            else{
              header("location:../index.php?action=inscription_succee")
            }
          }
          else{
            header("location:../index.php?action=erreur_mdp")
          }
        }
        else{
          header("location:../index.php?action=erreur_mail");
        }*/
      //}
    //}
    /*else{
      header("location:../");
    }*/
  }
?>
