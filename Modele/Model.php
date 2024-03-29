<?php
	require_once("ConnectBdd.php");

	class Query_bdd extends Connect{
		public function inscription($nom, $prenom, $mail, $mention, $dortoir, $passwd){
		$bdd = $this->dbconnect();
		$inscription_insert = $bdd->prepare("INSERT INTO ETUDIANT(nom, prenom, mail, mention, dortoir, mdp) VALUES(?, ?, ?, ?, ?, ?)");
		$inscription_insert->execute(array($nom, $prenom, $mail, $mention, $dortoir, $passwd));
		return $inscription_insert;
		}

		public function teste(){
		$bdd = $this->dbconnect();
		$id = 1;
		$alefa = $bdd->prepare("SELECT nom FROM ETUDIANT WHERE id_etudiant = ?");
		$alefa->execute(array($id));
		return $alefa;
		}

		public function obtenir_numero($prenom, $passwd){
		$bdd = $this->dbconnect();
		$num = $bdd->prepare("SELECT id_etudiant FROM ETUDIANT WHERE prenom = ? and mdp = ? ");
		$num->execute(array($prenom, $passwd));
		return $num;
		}

		public function verifier_compte($prenom, $id_etudiant, $mdp){
		$bdd = $this->dbconnect();
		$verifier_compte = $bdd->prepare("SELECT * FROM ETUDIANT WHERE id_etudiant = ? and prenom = ? and mdp = ?");
		$verifier_compte->execute(array($id_etudiant, $prenom, $mdp));
		return $verifier_compte;
		}

		public function verify_disponibilite($type, $correspondance){
		$bdd = $this->dbconnect();
		$verify_disponibilite = $bdd->prepare("SELECT * FROM MATERIEL WHERE nom=? and correspondance=?");
		$verify_disponibilite->execute(array($type, $correspondance));
		return $verify_disponibilite;
		}

		public function rendre_nondispo_materiel($type, $correspondance, $id_etudiant, $id_mat){
		$bdd = $this->dbconnect();
		$rendre_nondispo_materiel = $bdd->prepare("UPDATE MATERIEL SET dispo='0' WHERE nom=? and correspondance=?");
		$rendre_nondispo_materiel->execute(array($type, $correspondance));

		$creation_emprunt = $bdd->prepare("INSERT INTO EMPRUNT(id_etudiant, id_materiel, nom, correspondance, date_emprunt) VALUES(?,?,?,?, NOW())");
		$creation_emprunt->execute(array($id_etudiant, $id_mat, $type, $correspondance));
		return $creation_emprunt;
		}

		public function verification_emprunt($correspondance, $id_etudiant, $id_mat){
			$bdd = $this->dbconnect();
			$verification_emprunt = $bdd->prepare("SELECT * FROM EMPRUNT WHERE id_etudiant = ? and id_materiel = ? and correspondance = ? and date_retour IS NULL");
			$verification_emprunt->execute(array($id_etudiant, $id_mat, $correspondance));
			return $verification_emprunt;
		}

		public function rendre_dispo_materiel($type, $correspondance, $id_etudiant, $id_mat){
			$bdd = $this->dbconnect();
			$rendre_dispo_materiel = $bdd->prepare("UPDATE EMPRUNT SET date_retour = NOW() WHERE id_etudiant=? and id_materiel=? and correspondance=?");
			$rendre_dispo_materiel->execute(array($id_etudiant, $id_mat, $correspondance));

			$rendre_dispo_materiel_mat = $bdd->prepare("UPDATE MATERIEL SET dispo='1' WHERE id_mat=? and correspondance=?");
			$rendre_dispo_materiel_mat->execute(array($id_mat, $correspondance));
			return $rendre_dispo_materiel;
		}
	}
