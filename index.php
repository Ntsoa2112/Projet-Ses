<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Public/Boostrap/bootstrap.min.css">
    <script src="Public/Js/jquery.min.js"></script>
    <script src="Public/Boostrap/bootstrap.min.js"></script>
    <link href="Public/Css/inter.css" rel="stylesheet"  type="text/css">
    <title>Projet</title>
  </head>
  <body>
    <span> <button type="button" onclick="window.location.href = 'Controlleur/controller.php?action=doleance'" class="btn btn-primary">Doléance</button></span>
    <span><button type="button" onclick="window.location.href = 'Controlleur/controller.php?action=rendre'"  class="btn btn-primary">Rendre </button></span>
    <span><button type="button" onclick="window.location.href = 'Controlleur/controller.php?action=emprunter'"  class="btn btn-primary">Emprunter</button></span>
    <span><button type="button" data-toggle="modal" data-target="#inscrire"  class="btn btn-primary">S'inscrire</button></span>

    <?php
    if(!empty($_GET["action"])){
      $action = htmlspecialchars($_GET["action"]);
      if($action == "erreur_mail"){
    ?>
        <br><span>Veuillez utilisé le mail Sesame</span>
    <?php
      }
      elseif($action == "erreur_mdp"){
    ?>
        <br><span>Confirmation de mot de passe incorrecte ou mot de passe trop court</span>
    <?php
      }
      elseif($action == "inscription_succee" && !empty($_GET["numero"])){
        $numero = htmlspecialchars($_GET["numero"]);
    ?>
        <br><span>Inscription avec succée, votre numéro est <?=$numero?></span>
    <?php
      }
      elseif($action == "erreur_identification"){
    ?>
        <br><span>Erreur de l'identification</span>
    <?php
      }


    }
     ?>

    <div id="inscrire" class="modal fade" role="dialog">
      	<div class="modal-dialog">
      		<div class="modal-content">
      			<div class="modal-header">
      				<a class="close" data-dismiss="modal"></a>
      				<h3>S'inscrire</h3>
      			</div>

      			<form id="contactForm" name="contact" role="form" action="Controlleur/controller.php?action=inscription" method="post">
      				<div class="modal-body">
                <div class="form-group">
      						<label for="name">Nom</label>
      						<input type="text" name="nom" class="form-control" required>
      					</div>
      					<div class="form-group">
      						<label for="name">Prénom</label>
      						<input type="text" name="prenom" class="form-control" required>
      					</div>
      					<div class="form-group">
      						<label for="email">Mail</label>
      						<input type="email" name="email" class="form-control" required>
      					</div>

      					<div class="form-group half" >
                      <label for="mention">Mention</label>
                        <select name="mention" >
                              <option value="APS">APS</option>
                              <option value="APL">APL</option>
                       </select>
      					</div>
                <div class="form-group half" >
                      <label for="dortoir">Numéro dortoir</label>
                        <select name="dortoir" >

                                <?php
                                $i = 1;
                                for($i; $i<13; $i++){
                                  echo "<option> $i </option>";
                                }
                                 ?>

                       </select>
      					</div>
                <div class="form-group">
      						<label for="email">Mot de passe</label>
      						<input type="password" name="mdp1" class="form-control" placeholder="4 caractére minimum" required>
      					</div>
                <div class="form-group">
      						<label for="email">Confirmation mot de passe</label>
      						<input type="password" name="mdp2" class="form-control" placeholder="4 caractére minimum" required>
      					</div>

    				</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  						<input type="submit" class="btn btn-success" name="inscrire" id="submit" value="S'incrire">
    				</div>
    			</form>
    		</div>
    	</div>
    </div>

  </body>
</html>
