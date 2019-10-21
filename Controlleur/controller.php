<?php
require_once("../Modele/Model.php");
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
        if($mdp1 === $mdp2 && strlen($mdp1)>=4){
          $salt1 = "qs548*";
          $salt2 = "5qs4!";
          $passwd = hash("sha512", $salt1.$mdp1.$salt2);
          $query = new Query_bdd;
          $inscription = $query->inscription($nom, $prenom, $mail, $mention, $dortoir, $passwd);
          if($inscription === false){
            echo "Erreur inscription";
          }
          else{
            $numero = $query->obtenir_numero($prenom, $passwd);
            $numero_li = $numero->fetch();
            $num = $numero_li["id_etudiant"];
            header("location:../index.php?action=inscription_succee&numero=$num");
          }
        }
        else{
          header("location:../index.php?action=erreur_mdp");
        }
      }
      else{
        header("location:../index.php?action=erreur_mail");
      }
    }
  }
  else{
    $prenom = $_POST["prenom"];
    $id_etudiant = $_POST["numero"];
    $mdp = $_POST["mdp"];
    $salt1 = "qs548*";
    $salt2 = "5qs4!";
    $passwd = hash("sha512", $salt1.$mdp.$salt2);
    $query = new Query_bdd;
    $verification = $query->verifier_compte($prenom, $id_etudiant, $passwd);
    $verification_li = $verification->fetch();
    $prenom_bdd = $verification_li["prenom"];
    $mdp_bdd = $verification_li["mdp"];
    if($prenom === $prenom_bdd && $passwd === $mdp_bdd){
      if($action == "emprunter_materiel"){
        $type = $_GET["type"];
        $correspondance = $_POST["correspondance"];
        $verify_disponibilite = $query-> verify_disponibilite($type, $correspondance);
        $verify_disponibilite_li = $verify_disponibilite->fetch();
        $dispo = $verify_disponibilite_li["dispo"];
        $id_mat = $verify_disponibilite_li["id_mat"];
        if($dispo == 1){
          $rendre_nondispo_materiel = $query->rendre_nondispo_materiel($type, $correspondance, $id_etudiant, $id_mat);
          if($rendre_nondispo_materiel === false){
            echo "Erreur rendre_nondispo_materiel";
          }
          else{
            header("location:../View/emprunter.php?action=disponible&type=$type&correspondance=$correspondance");
          }
        }
        else{
          header("location:../View/emprunter.php?action=non_disponible&type=$type&correspondance=$correspondance");
        }
      }
    }
    else{
      header("location:../index.php?action=erreur_identification");
    }
  }
}
