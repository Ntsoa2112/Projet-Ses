<!DOCTYPE html>


<html lang="fr" dir="ltr">

	  <head>
			  <meta charset="utf-8">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
			  <link href="style.css" rel="stylesheet"  type="text/css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			  <script type="text/javascript" src="js/contact.js"></script>
			  <title>Emprunter</title>
	  </head>

  <body>


	<div class="button">
		<span id="contact"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal1">Clé</button></span>
		<span id="contact"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal2">Fer à repasser</button></span>
		<span id="contact"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal3">Guitare</button></span
		<span id="contact"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal4">Ballon</button></span>
		<span id="contact"><button type="button" class="btn btn-info btn" data-toggle="modal" data-target="#contact-modal5">Boules</button></span>
	</div>

	<?php
	if(!empty($_GET["action"])){
		$action = htmlspecialchars($_GET["action"]);
		$type = htmlspecialchars($_GET["type"]);
		$correspondance = htmlspecialchars($_GET["correspondance"]);
			if($action == "non_disponible"){
	?>
		<br><span>Matériel: <?=$type?></span>
		<br><span>Correspondance: <?=$correspondance?></span>
		<br><span>Non disponible</span>
	<?php
		}
			if($action == "disponible"){
	?>
		<br><span>Matériel: <?=$type?></span>
		<br><span>Correspondance: <?=$correspondance?></span>
		<br><span>Le matériel est à votre disposition</span>
	<?php
		}
	}

	 ?>

	<div>
    <div id="contact-modal1" class="modal fade" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<a class="close" data-dismiss="modal">×</a>
    				<h3>Clé</h3>
    			</div>

    			<form id="contactForm" name="contact" role="form" action="../Controlleur/controller.php?action=emprunter_materiel&type=clé" method="post">
    				<div class="modal-body">
    					<div class="form-group">
    						<label for="name">Prenom</label>
    						<input type="text" name="prenom" class="form-control" required>
    					</div>
    					<div class="form-group">
    						<label for="numero">Numéro</label>
    						<input type="text" name="numero" class="form-control" required>
    					</div>

							<div class="form-group half" >
								<label for="correspondance">Salle</label>
								  <select name="correspondance" required>
										<option value="Salle C1">Salle C1</option>
										<option value="Salle C2">Salle C2</option>
										<option value="Salle C3">Salle C3</option>
										<option value="Salle C4">Salle C4</option>
										<option value="Salle E1">Salle E1</option>
										<option value="Salle E2">Salle E2</option>
										<option value="Salle E3">Salle E3</option>
										<option value="Salle E4">Salle E4</option>
										<option value="Salle E5">Salle E5</option>
										<option value="Club Informatique">Club Informatique</option>
										<option value="Club Cuisine">Club Cuisine</option>
										<option value="Club Sport">Club Sport</option>
										<option value="Club Journalisme">Club Journalisme</option>
										<option value="Club Théatre">Club Théatre</option>
										<option value="Club Musique">Club Musique</option>
										<option value="Laboratoire">Laboratoire</option>
										<option value="Intendance">Intendance</option>

								  </select>
							 </div>

							 <div class="form-group">
								 <label for="mdp">Mot de passe</label>
								 <input type="password" name="mdp" class="form-control" required>
							 </div>

    				</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    					<input type="submit" class="btn btn-success" id="submit" value="Emprunter">
    				</div>
    			</form>
    		</div>
    	</div>
    </div>

    <div id="contact-modal2" class="modal fade" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<a class="close" data-dismiss="modal">×</a>
    				<h3>Fer à repasser</h3>
    			</div>

    			<form id="contactForm" name="contact" role="form" action="../Controlleur/controller.php?action=emprunter_materiel$type=fer" method="post">
    				<div class="modal-body">
    					<div class="form-group">
    						<label for="prenom">Prenom</label>
    						<input type="text" name="prenom" class="form-control">
    					</div>
    					<div class="form-group">
    						<label for="numero">Numero</label>
    						<input type="text" name="email" class="form-control">
    					</div>

							<div class="form-group half" >
		                <label for="correspondance">Fer</label>
		                  <select name="correspondance" >
		                        <option value="IG">IG</option>
		                        <option value="IG1">IG1</option>
		                        <option value="IG2">IG2</option>
		                        <option value="IF">IF</option>
		                        <option value="IF1">IF1</option>
		                        <option value="IF2">IF2</option>
		                 </select>
							</div>

							<div class="form-group">
								<label for="numero">Mot de passe</label>
								<input type="password" name="mdp" class="form-control">
							</div>

							<div class="modal-footer">
		    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<input type="submit" class="btn btn-success" id="submit" value="Emprunter">
	    				</div>
						</div>
    			</form>
    		</div>
    	</div>
    </div>

	<div id="contact-modal3" class="modal fade" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<a class="close" data-dismiss="modal">×</a>
    				<h3>Guitare</h3>
    			</div>

    			<form id="contactForm" name="contact" role="form" action="../Controlleur/controller.php?action=emprunter_materiel&type=guitare" method="post">
    				<div class="modal-body">
    					<div class="form-group">
    						<label for="prenom">Prenom</label>
    						<input type="text" name="prenom" class="form-control">
    					</div>
    					<div class="form-group">
    						<label for="numero">Numero</label>
    						<input type="text" name="numero" class="form-control">
    					</div>

						<div class="form-group half" >
              <label for="correspondance">Type</label>
                <select name="correspondance" >
                  <option value="G1">G1</option>
                  <option value="G2">G2</option>
               </select>
						</div>

						<div class="form-group">
							<label for="mdp">Mot de passe</label>
							<input type="password" name="mdp" class="form-control">
						</div>

    				</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<input type="submit" class="btn btn-success" id="submit" value="Emprunter">
    				</div>
    			</form>
    		</div>
    	</div>
    </div>

	<div id="contact-modal4" class="modal fade" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<a class="close" data-dismiss="modal">×</a>
    				<h3>Ballon</h3>
    			</div>

    			<form id="contactForm" name="contact" role="form" action="../Controlleur/controller.php?action=emprunter_materiel&type=ballon" method="post">
    				<div class="modal-body">
    					<div class="form-group">
    						<label for="prenom">Prenom</label>
    						<input type="text" name="prenom" class="form-control">
    					</div>
    					<div class="form-group">
    						<label for="numero">Numero</label>
    						<input type="text" name="numero" class="form-control">
    					</div>

							<div class="form-group half" >
		            	<label for="correspondance">Ballon de </label>
			             <select name="correspondance" >
			                <option value="Foot-ball">Foot-ball</option>
			                <option value="Basket-ball">Basket-ball</option>
											<option value="Hand-ball-ball">Hand-ball</option>
											<option value="Volley-ball">Volley-ball-ball</option>
			             </select>
							</div>

							<div class="form-group">
								<label for="mdp">Mot de passe</label>
								<input type="password" name="mdp" class="form-control">
							</div>

		    			<div class="modal-footer">
	    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<input type="submit" class="btn btn-success" id="submit" value="Emprunter">
	    				</div>
						</div>
    			</form>
    		</div>
    	</div>
    </div>

	<div id="contact-modal5" class="modal fade" role="dialog">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<a class="close" data-dismiss="modal">×</a>
    				<h3>Boules</h3>
    			</div>

    			<form id="contactForm" name="contact" role="form" action="../Controlleur/controller.php?action=emprunter_materiel&type=boulle" method="post">
    				<div class="modal-body">
							<div class="form-group">
    						<label for="prenom">Prenom</label>
    						<input type="text" name="prenom" class="form-control">
    					</div>
    					<div class="form-group">
    						<label for="numero">Numero</label>
    						<input type="text" name="numero" class="form-control">
    					</div>

							<div class="form-group half" >
	                <label for="correspondance">Type </label>
	                 <select name="correspondance" >
	                    <option value="P1">P1</option>
	                    <option value="P2">P2</option>
	                 </select>
							</div>

							<div class="form-group">
								<label for="mdp">Mot de passe</label>
								<input type="password" name="mdp" class="form-control">
							</div>

	    				<div class="modal-footer">
	    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<input type="submit" class="btn btn-success" id="submit" value="Emprunter">
	    				</div>

	    			</div>

    			</form>
    		</div>
    	</div>
    </div>
  </body>
</html>
